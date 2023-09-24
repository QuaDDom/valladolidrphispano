import Main from "./class.js"
const main = new Main();
const time = new Date()
var init = false
var path = "../../phone/sounds/"
var num = "+56" + Math.round(Math.random() * 10000005)
const socket = io("ws://localhost:3020")
console.log(socket)
console.log(num)




var initSystem = setInterval(() => {
  if (init) {
    main.getConfig("blocks").then((data) => {
      socket.emit("system", { num: num, blocks: data })
    })
    main.getConfig("ringtone").then((data) => {
      $("#ringtone")[0].volume = 0.5
      $("#ringtone").attr("src",path+data)
    })
  
    clearInterval(initSystem)
  }
}, 800);


/* Socket Calls */


socket.on("receivingCall", (data) => {
  console.log("event:", "receivingCall", data.num)
  setTimeout(() => {
    reciver(data.num, true)
  }, 500);

})

socket.on("cancelCall", () => {
  reciver("", false)
  call("", false)
  console.log("event:", "cancel")
})

socket.on("event:notify", (data) => {
  console.log(data.message)
})

$("#contestar").on("click", () => {

})


$(document).on("click", "#block_number", () => {
  let n = $("#reciver-call").text()
  socket.emit("event:hangout")
  main.getConfig("blocks").then((data) => {
    if(!data.includes(n)){
      data.push(n)
      main.saveConfig("blocks", data)
      socket.emit("system:update", data)
    }
   
  })
})




setInterval(() => {
  var minutes = time.getMinutes() > 9 ? time.getMinutes() : "0" + time.getMinutes()
  $(".time p").text(time.getHours() + ":" + minutes)
}, 1000);


var transition = false


var win_w_max = 226
var win_w_min = 102

$(window).on("load", () => {
  main.init().then((data) => {
    init = data
  });
})

$(document).on("click", (e) => {
  if (!$(e.target).hasClass("phone-main") && !transition) {
    if (!$(e.target.offsetParent).hasClass("phone-main")) {
      if ($(".phone-main").hasClass("phone-main-open")) {
        transition = true
        toggleView("", false)
        toggleApps(false)
        setTimeout(() => {
          $(".phone-main").removeClass("phone-main-open")
        }, 130);
        var close = setInterval(() => {
          if ($(".phone-main")[0].clientWidth == win_w_min) {
            transition = false
            clearInterval(close)
          }
        }, 100);
      }
    }
  }
})

$(".phone-main").on("click", () => {
  if (!$(".phone.main").hasClass("phone-main-open") && !transition) {
    transition = true
    $(".phone-main").addClass("phone-main-open")
    toggleApps(true)
    var close = setInterval(() => {
      if ($(".phone-main")[0].clientWidth == win_w_max) {
        transition = false
        clearInterval(close)
      }
    }, 100);
  }
})

$(document).on("click", ".apps", (e) => {
  let index = $(e.currentTarget).attr("index")
  main.apps(index).then((data) => {
    toggleView(data, true)
  })
})


$(document).on("click", ".block-option", (e) => {
  let v = $(e.currentTarget).attr("win")
  if (v == "close") {
    toggleView("", false)
  } else {
    $(".block p").text("Ajustes")
    $(".settings-panel").html("")
    $(".settings-panel").css("z-index", "-99")
    $(".block-option[win='back']").css("transform", "translateX(-45px)")
    $(".block-option[win='close']").css("transform", "translateX(0px)")
  }

})

function toggleApps(state) {
  if (state) {
    setTimeout(() => {
      $(".phone-apps").css("opacity", 1)
    }, 140);
  } else {
    $(".phone-apps").css("opacity", 0)
  }
}

$(document).on("click", ".contact", (e) => {
  let num = $(e.currentTarget).find(".contact-info span").text()
  $(".call-options .call-option").css("transform", "translateY(0px)")
  call(num, true)
})

function toggleView(html, state) {
  $(".phone-into-app").html(html)
  if (html.includes('contacts-main')) {
    main.getConfig("contacts").then((data) =>
      data.map((e) =>
        $(".contacts").append(`<div class="contact">
      <img src="../../phone/assets/img/user-2.svg" alt="">
      <div class="contact-info">
          <p>${e.name}</p>
          <span>${e.number}</span>
      </div>
    </div>
  `)))
  }

  if (state) {
    $(".phone-into-app").css("display", "block")
    $(".phone-into-app").css("z-index", "99")
    $(".phone-into-app").css("transform", "translateX(" + win_w_max + "px)")
    setTimeout(() => {
      $(".phone-into-app").css("opacity", 1)
      $(".phone-into-app").css("transform", "translateX(0px)")
    }, 150);
  } else {
    $(".phone-into-app").css("opacity", 0)
    setTimeout(() => {
      $(".phone-into-app").css("display", "none")
      $(".phone-into-app").css("z-index", "-99")
    }, 150);
  }
}

function showSettings(state, title) {
  $(".settings-panel").html("")
  $(".block p").text(title)
  if (state) {
    $(".block-option[win='back']").css("transform", "translateX(0px)")
    $(".block-option[win='close']").css("transform", "translateX(45px)")
    $(".settings-panel").css("z-index", "99")
  } else {
    $(".block-option[win='back']").css("transform", "translateX(-45px)")
    $(".block-option[win='close']").css("transform", "translateX(0px)")
    $(".settings-panel").css("z-index", "-99")
  }

}


$(document).on("click", ".call-number", (e) => {
  let n = $(e.currentTarget).attr("n")
  let v = $("#input_number").val()
  $("#input_number").val(v + n)
})

$(document).on("click", ".input-add-bg", () => {
  $(".input-add").css("z-index", "-99")
  $(".input-add").css("opacity", 0)
})

$(document).on("click", ".call-more-option[o='add_contact']", () => {
  $(".input-add").css("z-index", "99")
  $(".input-add").css("opacity", 1)
})

$(document).on("click", ".input-button", () => {
  let name = $("#name_contact").val()
  let num = $("#input_number").val()
  if (name.length > 3 && num.length > 8 && num.includes("+")) {
    main.getConfig("contacts").then((data) => {
      data.push({ name: name, number: num })
      main.saveConfig("contacts", data)
      $(".input-add").css("z-index", "-99")
      $(".input-add").css("opacity", 0)
    })
  } else {
    console.log("Fallo en algo")
  }
})

$(document).on("click", ".settings-tab", (e) => {
  let t = $(e.currentTarget).attr("tab")
  showSettings(false, "Ajustes")
  if (t == "background") {
    showSettings(true, "Background")
    $(".settings-panel").html('<div class="set_bg_list"></div>')
    for (let index = 0; index < 31; index++) {
      $(".set_bg_list").append(`<img class="set_bg" src="../phone/backgrounds/b${index}.png" alt=""/>`)
    }
  } else if (t == "sound") {
    showSettings(true, "Sounds")
    $(".settings-panel").html('<div class="set_sound_list"></div>')
    for (let index = 0; index < 2; index++) {
    $(".set_sound_list").append(`<div class="set_warp"><audio class="set_sound" style="max-width: 120px;" src="${path}sound${index}.mp3" controls></audio><button id="put_sound" data="../phone/sounds/sound${index}.mp3">ok</button></div>`)
    }
  } else if (t == "block") {
    showSettings(true, "Numbers blocks")
    $(".settings-panel").html('<div class="set_blocks_list"></div>')
    main.getConfig("blocks").then((data) => {
      data.map((number) => {
        $(".set_blocks_list").append(`<p>${number}</p><button id="unblock" n="${number}">unblock</button>`)
      })
    })

  } else if (t == "remove_config") {
    main.deleteConfig()
  }
})

$(document).on("click", ".set_bg", (e) => {
  main.saveConfig("background", $(e.currentTarget).attr("src"))
})

$(document).on("click", ".panic-button", () => {
  call("#133", true)
  $(".call-options .call-option").css("transform", "translateY(0px)")
})

$(document).on("click","#put_sound",(e) => {
  let s = $(e.currentTarget).attr("data")
  $("#ringtone").attr("src",s)
  main.saveConfig("ringtone", s)
})

$(document).on("click", "#unblock", (e) => {
  let n = $(e.currentTarget).attr("n")
  main.getConfig("blocks").then((data) => {
    var blocks_new = (data).filter((en) => en != n)
    main.saveConfig("blocks", blocks_new)
    $(".set_blocks_list").html("")
    blocks_new.map((number) => {
      $(".set_blocks_list").append(`<p>${number}</p><button id="unblock" n="${number}">unblock</button>`)
    })
    socket.emit("system:update", blocks_new)
  })
})


$(document).on("click", ".call-option", (e) => {
  let v = $("#input_number").val()
  let o = $(e.currentTarget).attr("o")

  if (o == "normal") {
    $(e.currentTarget).css("transform", "translateY(0px)")
    call(v, true)
  } else if (o == "calling") {
    if (!$(".call-main").length) {
      $(e.currentTarget).css("transform", "translateY(50px)")
    }
    call(v, false)
  }

})



function call(n, state) {

  if (state) {
    $(".call-options .call-option").attr("o", "calling")
    $(".calling").css("opacity", 1)
    $(".calling").css("z-index", "99")
    $(".call-options").css("z-index", "99")
    $("#call").text(n)
    $(".call-options .call-option").addClass("call-calling")
    socket.emit("event:call", { num: n })
  } else {
    $(".call-options .call-option").attr("o", "normal")
    $(".calling").css("opacity", 0)
    $(".calling").css("z-index", "-99")
    $("#call").text("---------")
    $(".call-options .call-option").removeClass("call-calling")
    socket.emit("event:hangout")
  }
}

function reciver(n, state) {
  
  if (state) {
    $(".receiver-calling").css("opacity", 1)
    $(".phone-receivercall").css("z-index", "100")
    $(".phone-receivercall").css("display", "block")
    $("#reciver-call").text(n)
    $("#ringtone")[0].play()
  } else {
    $(".receiver-calling").css("opacity", 0)
    $(".phone-receivercall").css("z-index", "-99")
    $(".phone-receivercall").css("display", "none")
    $("#reciver-call").text("---------")
    socket.emit("event:hangout")
    $("#ringtone")[0].pause()
    $("#ringtone")[0].currentTime = 0
  }
}

$(document).on("click", "#attendCall", () => {
  $("#ringtone")[0].pause()
  $("#ringtone")[0].currentTime = 0
  socket.emit("event:establish")
})

socket.on("event:voice",(data) => {

})

$(document).on("click", "#cancelCall", () => {
  socket.emit("event:hangout")
})

$("#hangout").on("click", () => {
  socket.emit("event:hangout")
})



/*

// get video/voice stream
navigator.mediaDevices.getUserMedia({
  video: true,
  audio: true
}).then(gotMedia).catch(() => {})

function gotMedia (stream) {
  var peer1 = new SimplePeer({ initiator: true, stream: stream })
  var peer2 = new SimplePeer()

  peer1.on('signal', data => {
    peer2.signal(data)
    console.log(data)
  })

  peer2.on('signal', data => {
    peer1.signal(data)
    console.log(data)
  })

  peer2.on('stream', stream => {
    // got remote video stream, now let's show it in a video tag
    var video = document.querySelector('video')

    if (video) {
      video.srcObject = stream
    } else {
      video.src = window.URL.createObjectURL(stream) // for older browsers
    }

    video.play()
  })
}
  



'use strict';

var videoElement = document.querySelector('video');
var audioSelect = document.querySelector('select#audioInputs');
var videoSelect = document.querySelector('select#videoInputs');

audioSelect.onchange = getStream;
videoSelect.onchange = getStream;

getStream().then(getDevices).then(gotDevices);

function getDevices() {
  // AFAICT in Safari this only gets default devices until gUM is called :/
  return navigator.mediaDevices.enumerateDevices();
}

function gotDevices(deviceInfos) {
  window.deviceInfos = deviceInfos; // make available to console
  console.log('Available input and output devices:', deviceInfos);
  for (const deviceInfo of deviceInfos) {
    const option = document.createElement('option');
    option.value = deviceInfo.deviceId;
    if (deviceInfo.kind === 'audioinput') {
      option.text = deviceInfo.label || `Microphone ${audioSelect.length + 1}`;
      audioSelect.appendChild(option);
    } else if (deviceInfo.kind === 'videoinput') {
      option.text = deviceInfo.label || `Camera ${videoSelect.length + 1}`;
      videoSelect.appendChild(option);
    }
  }
}

async function getStream() {
  if (window.stream) {
    window.stream.getTracks().forEach(track => {
      track.stop();
    });
  }
  const audioSource = audioSelect.value;
  const videoSource = videoSelect.value;
  const constraints = {
    audio: {deviceId: audioSource ? {exact: audioSource} : undefined},
    video: {deviceId: videoSource ? {exact: videoSource} : undefined}
  };
  return navigator.mediaDevices.getUserMedia(constraints).
    then(gotStream).catch(handleError);
}

function gotStream(stream) {
  window.stream = stream; // make stream available to console
  audioSelect.selectedIndex = [...audioSelect.options].
    findIndex(option => option.text === stream.getAudioTracks()[0].label);
  videoSelect.selectedIndex = [...videoSelect.options].
    findIndex(option => option.text === stream.getVideoTracks()[0].label);
  videoElement.srcObject = stream;
}

function handleError(error) {
  console.error('Error: ', error);
}
*/