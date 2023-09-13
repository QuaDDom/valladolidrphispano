var settings = {
    notify: [],
    apps_store: [],
    contacts:[],
    background: "./backgrounds/b6.png"
}

const apps = [
    {
        name_block: "Trabajo",
        name_show:true,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/Escudo_de_Valladolid.png"
    },
    {
        name_block: "Panico",
        name_show:true,
        query: ".phone-apps",
        app_path: "./apps/panic.html",
        icon_path: "./apps_icons/priority_high_white_24dp.svg"
    },
    {
        name_block: "VLD Tienda",
        name_show:true,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/shopping_bag_white_24dp.svg"
    },
    {
        name_block: "VLD Social",
        name_show:true,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/Escudo_de_Valladolid.png"
    },
    {
        name_block: "Llamar",
        name_show:false,
        query: ".phone-apps",
        app_path: "./apps/call.html",
        icon_path: "./apps_icons/phone_white_24dp.svg"
    },
    {
        name_block: "Contactos",
        name_show:false,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/person_white_24dp.svg"
    },
    {
        name_block: "Mensajes",
        name_show:false,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/question_answer_white_24dp.svg"
    },
    {
        name_block: "Menu",
        name_show:false,
        query: ".phone-apps",
        app_path: "./apps/contacts.html",
        icon_path: "./apps_icons/menu_white_24dp.svg"
    },

    /* Settings - notify */
    {
        name_block: "Notificaciones",
        name_show:false,
        query: ".phone-top",
        app_path: "./apps/notify.html",
        icon_path: "./apps_icons/notifications_white_24dp.svg"
    },
    {
        name_block: "Ajustes",
        name_show:false,
        query: ".phone-top",
        app_path: "./apps/settings.html",
        icon_path: "./apps_icons/settings_white_24dp.svg"
    },
]


export default class Main {
    constructor() { }

    init() {
        if (!localStorage.getItem("settings")) {
            localStorage.setItem("settings", JSON.stringify(settings))
        }else{
            settings = JSON.parse(localStorage.getItem("settings"))
        }


        if(settings.apps_store.length){
            settings.apps_store.map((e, i) => {
                $(e.query).append(`
                <div class="apps" index="${apps.length+i}">
                <div class="apps_bg">
                    <img src="${e.icon_path}" alt="">
                </div>
                    ${e.name_show ? `<p>${e.name_block}</p>` : ""}
                </div>
            `)
            })
        }

        $(".phone-bg img").attr("src", settings.background)

        apps.map((e, i) => {
            $(e.query).append(`
            <div class="apps" index="${i}">
            <div class="apps_bg">
                <img src="${e.icon_path}" alt="">
            </div>
                ${e.name_show ? `<p>${e.name_block}</p>` : ""}
            </div>
        `)
        })
    }


    async getConfig(key){
        return settings[key]
    }
     
    async saveConfig(key,value){
        settings[key] = value;
        this.reloadConfig()
        localStorage.setItem("settings",JSON.stringify(settings))
    }

    reloadConfig(){
        $(".phone-bg img").attr("src", settings.background)
    }

    async apps(index) {
        let path = apps[index].app_path
        let name = apps[index].name_block ? apps[index].name_block : ""

        return await fetch(path).then((data) => data).then(async (html) => `
        <div class="block">
        <div class="block-option" win="back" style="transform:translateX(-45px);">
            <img style="transform: translateX(2px);" src="../assets/img/arrow_back_ios_white_24dp.svg" alt="">
        </div>
        <p>${name}</p>
        <div class="block-option" win="close">
            <img src="../assets/img/close_white_24dp.svg" alt="">
        </div>
    </div>`+ await html.text())
    }
}

