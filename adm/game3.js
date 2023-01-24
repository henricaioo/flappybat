const sprites = new Image()
sprites.src = "./spritesheet.png"

const hit = new Audio()
hit.src = "./effects/hit.wav"

const canvas = document.getElementById("game")
const ctx = canvas.getContext("2d")

let frame = 0

function fazColisao(bat){
    const batY = bat.dy + bat.height

    if(batY >= canvas.height || batY <= bat.height){
        return true;
    }
    return false;
}

function createFlaapyBat(){
    const flappyBat = {
        width: 32,
        height: 32,
        dx: 10,
        dy: 50,
        velocidade: 0,
        gravidade: 0.25,
        pulo: 4.6,
        atualFrame: 0,
        updateFrame(){
            const frameInterval = 10
            const passInterval = frame % frameInterval === 0
            if(passInterval){
                const baseIncrement = 1
                const increment = baseIncrement + this.atualFrame
                const baseRepeat = this.moviments.length
                this.atualFrame = increment % baseRepeat
            }
        },
        moviments:[
            {
                spriteX: 1, spriteY: 266,
            },{
                spriteX: 33, spriteY: 257,
            },
        ],
        draw(){
            this.updateFrame()
            const {spriteX, spriteY} = this.moviments[this.atualFrame]
            ctx.drawImage(
                sprites, spriteX, spriteY, this.width, this.height,
                this.dx, this.dy, this.width, this.height,
            )
        },
        jump(){
            this.velocidade = -this.pulo
        },
        update(){
            if(fazColisao(flappyBat)){
                hit.play()
                tradeScreen(screens.gameOver)
                return;
            }
    
            this.velocidade += this.gravidade
            this.dy += this.velocidade
        }
    }

    return flappyBat
}

function createBackground() {
    const background = {
        spriteX: 0,
        spriteY: 0,
        swidth: 256,
        sheight: 256,
        dwidth: canvas.width,
        dheight: canvas.height,
        dx: 0,
        dy: 0,
        draw(){
            ctx.drawImage(
                sprites, this.spriteX, this.spriteY, this.swidth, this.sheight,
                this.dx, this.dy, this.dwidth, this.dheight,
            )
            ctx.drawImage(
                sprites, this.spriteX, this.spriteY, this.swidth, this.sheight,
                (this.dx + this.dwidth), this.dy, this.dwidth, this.dheight,
            )
        },
        update(){
            const moviment = 1
            const movimention = this.dx - moviment

            this.dx = movimention % this.dwidth
        }
    }

    return background;
}

function createPipes(){
    const pipes = {
        swidth: 34,
        sheight: 256,
        floor:{
            spriteX: 258,
            spriteY: 0,
        },
        sky: {
            spriteX: 292,
            spriteY: 0,
        },
        dwidth: 52,
        dheight:400,
        space: 180,
        draw(){
            this.pairs.forEach((pair) =>{
                const pipesSpacing = 120
                const yRandom = pair.y

                const pipeSkyX = pair.x
                const pipeSkyY = yRandom
                ctx.drawImage(
                    sprites, this.sky.spriteX, this.sky.spriteY, this.swidth, this.sheight,
                    pipeSkyX, pipeSkyY, this.dwidth, this.dheight,
                )
    
                const pipeFloorX = pair.x
                const pipeFloorY = pipes.dheight + pipesSpacing + yRandom
    
                ctx.drawImage(
                    sprites, this.floor.spriteX, this.floor.spriteY, this.swidth, this.sheight,
                    pipeFloorX, pipeFloorY, this.dwidth, this.dheight,
                )

                pair.pipeSky = {
                    x: pipeSkyX,
                    y: this.dheight + pipeSkyY
                }

                pair.pipeFloor = {
                    x: pipeFloorX,
                    y: pipeFloorY,
                }
            })  
        },
        collisionFlappyBat(pair){
            const headFlappyBat = globals.flappyBat.dy
            const footFlappyBat = globals.flappyBat.dy + globals.flappyBat.height

            if(globals.flappyBat.dx +globals.flappyBat.width >= pair.x){
                if(headFlappyBat <= pair.pipeSky.y || footFlappyBat >= pair.pipeFloor.y){
                    return true;
                }
            }

            return false;
        },
        pairs: [],
        update(){
            const pass100frames = frame % 100 === 0
            if(pass100frames){
                this.pairs.push({
                    x: canvas.width,
                    y: -150 * (Math.random() + 1),
                })
            }

            this.pairs.forEach((pair) =>{
                pair.x -= 2

                if(this.collisionFlappyBat(pair)){
                    hit.play()
                    tradeScreen(screens.gameOver)
                }

                if(pair.x + this.dwidth <= 0){
                    this.pairs.shift()
                }
            }) 
            
        }
    }

    return pipes;
}

const getReady = {
    spriteX: 0,
    spriteY: 0,
    width: 174,
    height: 152,
    dx: (canvas.width / 2) - 174 / 2,
    dy: 50,
    draw(){
        /*ctx.drawImage(
            sprites, this.spriteX, this.spriteY, this.width, this.height,
            this.dx, this.dy, this.width, this.height,
        )*/
    },
}

const mensageGameOver = {
    spriteX: 0,
    spriteY: 0,
    width: 226,
    height: 152,
    dx: (canvas.width / 2) - 226 / 2,
    dy: 50,
    draw(){
        /*ctx.drawImage(
            sprites, this.spriteX, this.spriteY, this.width, this.height,
            this.dx, this.dy, this.width, this.height,
        )*/
    },
}

function createScore(){
    const score = {
        pontuation: 0,
        draw(){
            ctx.font = "35px 'VT323'"
            ctx.textAlign = "right"
            ctx.fillStyle = "white"
            ctx.fillText(`Score: ${this.pontuation}`, canvas.width - 10, 35)
        },
        update(){
            const frameInterval = 20
            const passInterval = frame % frameInterval === 0

            if(passInterval){
                this.pontuation++
            }
        }
    }

    return score;
}

const globals = {}

let screenActive = {}

const screens = {
    start:{
        starting(){
            globals.flappyBat = createFlaapyBat()
            globals.background = createBackground()
            globals.pipes = createPipes()
        },
        draw(){
            globals.background.draw()
            globals.flappyBat.draw()
            //getReady.draw()
        },
        click(){
            tradeScreen(screens.game)
        },
        update(){
            globals.background.update()        
        }
    }
}

screens.game = {
    starting(){
        globals.score = createScore()
    },
    draw(){
        globals.background.draw()
        globals.pipes.draw()
        globals.flappyBat.draw()
        globals.score.draw()
    },
    click(){
        globals.flappyBat.jump()
    },
    update(){
        globals.background.update()  
        globals.pipes.update()
        globals.flappyBat.update()
        globals.score.update()
    }
}

screens.gameOver = {
    draw(){
        //mensageGameOver.draw()
    },
    click(){
        tradeScreen(screens.start)
    },
    update(){},
}

function tradeScreen(newScreen){
    screenActive = newScreen

    if(screenActive.starting){
        screenActive.starting()
    }
}

window.addEventListener("keydown", (event) => {
    if(event.keyCode == 32){
        screenActive.click()
    }
})

function loop(){ 
    screenActive.draw()
    screenActive.update()

    frame++

    requestAnimationFrame(loop)
}

tradeScreen(screens.start)
loop()