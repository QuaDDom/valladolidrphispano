let url_path = location.pathname

$(window).on("load", () => {
    if (url_path === "/admin" || url_path === "/admin/") {
        $(".menu-left-item").removeClass("menu-left-item-active")
        $(".menu-left-item").first().addClass("menu-left-item-active")
    }

    if (url_path.includes("slider")) {
        $(".menu-left-item").removeClass("menu-left-item-active")
        $(".menu-left-item[tag='sliders']").first().addClass("menu-left-item-active")
    }
    if (url_path.includes("blog")) {
        $(".menu-left-item").removeClass("menu-left-item-active")
        $(".menu-left-item[tag='blogs']").first().addClass("menu-left-item-active")
    }
    if (url_path.includes("tools")) {
        $(".menu-left-item").removeClass("menu-left-item-active")
        $(".menu-left-item[tag='stats']").first().addClass("menu-left-item-active")
    }
    
    if ($("#type option:selected").val() == 1) {
        document.querySelectorAll("#time").forEach((e) => {
            $(e).css("display", "block")
        })
    } else {
        document.querySelectorAll("#time").forEach((e) => {
            $(e).css("display", "none")
        })
    }
})


$("#type").on("change", () => {
    if ($("#type option:selected").val() == 1) {
        document.querySelectorAll("#time").forEach((e) => {
            $(e).css("display", "block")
        })
    } else {
        document.querySelectorAll("#time").forEach((e) => {
            $(e).css("display", "none")
        })
    }
})

$("#image-cover").on("change", (e) => {
    loadImage(e.currentTarget.files[0])
})

function loadImage(file) {
    const fileread = new FileReader()
    fileread.readAsArrayBuffer(file)
    fileread.onload = function () {
        let blob = new Blob([fileread.result])
        let url = URL.createObjectURL(blob, { type: "image/jpg" });
        $("#image-preview").attr("src", url)
        $("#image-preview").css("opacity", 1)
    }
}