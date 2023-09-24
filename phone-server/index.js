const express = require('express')
const app = express();
const cors = require('cors')
const port = process.env.PORT || 3020;
const server = app.listen(
    port,
    console.log(
        `Server is running on the port ${(port)} `

    )
);
const io = require("socket.io")(server, {
    cors: {
        methods: ["GET", "POST"],
        allowedHeaders: ["*"],
        credentials: true,
    }
});

app.use(cors())

io.on("connection", socket => {
    socket.on("system", (data) => {
        socket.data = {
            calling: false,
            number: data.num,
            blocks:data.blocks,
            call:""
        }

    })

    socket.on("system:update",(data) => {
        socket.data.blocks = data
    })


    socket.on("event:establish",(data) => {
        socket.to(socket.data.call).broadcast.emit("event:voice",data)
    })


    socket.on("event:call", async (data) => {
        var caller
        var sockets = await io.fetchSockets()
    
        for (const sk of sockets) {
            if (sk.data.number == data.num && sk.data.number != socket.data.num && data.num.includes("+") && data.num.length > 5) {
                if(!sk.data.blocks.includes(socket.data.number)){
                    caller = sk
                }
               
            }
        }

        if (caller) {
            console.log("call:",true)
            if (!socket.data.calling && socket.data.num != data.num) {

                if (caller.data) {
                    caller.data.calling = true
                    caller.join(data.num)
                    caller.data.call = data.num
                    socket.data.call = data.num
                    console.log("call:","detect")
                }
                socket.join(data.num)
                socket.data.calling = true
                setTimeout(() => {
                    socket.to(data.num).emit("receivingCall", {num:socket.data.number});
                }, 1300);
            }

        } else {
            console.log("number is not exist")
            socket.emit("event:notify", { message: "Este usuario esta ocupado" })
        }
    })

 
    socket.on("event:hangout", async () => {
        if (socket.data.calling && socket.data.call) {
            io.to(socket.data.call).emit("cancelCall", "")
            await DisconnectAllCall(socket.data.call)
        }
    })

    async function DisconnectAllCall(id) {
        var sockets = await io.in(id).fetchSockets()
        for (const sk of sockets) {
            sk.data.calling = false
            sk.data.call = ""
            io.socketsLeave(id);
        }
    }
});