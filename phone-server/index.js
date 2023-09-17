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
            number: data.num
        }

    })


    socket.on("event:call", async (data) => {
        var caller = (await io.fetchSockets()).map((rate) => rate.data.number == data.num && rate.data.number != socket.data.num && data.num.includes("+") && data.num.length > 5 ? rate : false)
        var socket_call = null
        
        if (caller) {
            if (!socket.data.calling && socket.data.num != data.num) {
                //console.log(caller)
                
                caller.filter((f) => {
                    if(f.data){
                        socket_call = f
                        f.data.calling = true
                        f.join(data.num)
                        f.emit("receivingCall", data)
                    }
                  
                })
                socket.join(data.num)
                socket.data.calling = true

                //console.log(io.in(caller))
            }
            //socket.to(data.num).emit("receivingCall", data)

            socket.on("event:hangout", () => {
                //DisconnectHostRoom()

                socket_call.data.calling = false
                socket.data.calling = false

                io.to(data.num).emit("cancelCall","")
                socket.leave(data.num)
                socket_call.leave(data.num)

                
            })
        } else {
            socket.emit("event:notify", { message: "Este usuario esta ocupado" })
        }
    })


    async function DisconnectHostRoom(roomid) {
        io.socketsLeave(roomid);
    }
});