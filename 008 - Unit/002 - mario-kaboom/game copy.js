// https://kaboomjs.com/

kaboom({
    global: true, // import all kaboom functions to global namespace
    fullscreen: true, // if fullscreen
    scale: 1, // (2) pixel size (for pixelated games you might want small canvas + scale)
    debug: true, // debug mode
    clearColor: [0, 0, 0, 1], // background color (default black [0, 0, 0, 1])
})

// First level
loadSprite("coin", "assets/coin.png")
loadSprite("evil-shroom", "assets/evil-shroom.png")
loadSprite("brick", "assets/evil-shroom.png")
loadSprite("block", "assets/evil-shroom.png")
loadSprite("mario", "assets/evil-shroom.png")
loadSprite("mushroom", "assets/mushroom.png")
loadSprite("surprise-block", "assets/surprise-block.png")
loadSprite("unboxed", "assets/unboxed.png")
loadSprite("pipe-top-left", "assets/unboxed.png")
loadSprite("pipe-top-right", "assets/unboxed.png")
loadSprite("pipe-bottom-left", "assets/unboxed.png")
loadSprite("pipe-bottom-right", "assets/unboxed.png")

// Second level
loadSprite('blue-block', 'assets/blue-block.png')
loadSprite('blue-brick', 'assets/blue-brick.png')
loadSprite('blue-steel', 'assets/blue-steel.png')
loadSprite('blue-evil-shroom', 'assets/blue-evil-shroom.png')
loadSprite('blue-surprise', 'assets/surprise-blue-block.png')

scene("game", ({ level, score }) => {
    // draw background on the bottom, ui on top, layer "obj" is default
    layers(['bg', 'obj', 'ui'], 'obj')

    const maps = [
        [
          '                                      ',
          '                                      ',
          '                                      ',
          '                                      ',
          '                                      ',
          '     %   =*=%=                        ',
          '                                      ',
          '                            -+        ',
          '                    ^   ^   ()        ',
          '==============================   =====',
        ],
        [
          '£                                       £',
          '£                                       £',
          '£                                       £',
          '£                                       £',
          '£                                       £',
          '£        @@@@@@              x x        £',
          '£                          x x x        £',
          '£                        x x x x  x   -+£',
          '£               z   z  x x x x x  x   ()£',
          '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!',
        ]
      ]

      const levelCfg = {
        width: 20,
        height: 20,
        '=': [sprite('block'), solid()],
        '$': [sprite('coin'), 'coin'],
        '%': [sprite('surprise'), solid(), 'coin-surprise'],
        '*': [sprite('surprise'), solid(), 'mushroom-surprise'],
        '}': [sprite('unboxed'), solid()],
        '(': [sprite('pipe-bottom-left'), solid(), scale(0.5)],
        ')': [sprite('pipe-bottom-right'), solid(), scale(0.5)],
        '-': [sprite('pipe-top-left'), solid(), scale(0.5), 'pipe'],
        '+': [sprite('pipe-top-right'), solid(), scale(0.5), 'pipe'],
        '^': [sprite('evil-shroom'), solid(), 'dangerous'],
        '#': [sprite('mushroom'), solid(), 'mushroom', body()],
        '!': [sprite('blue-block'), solid(), scale(0.5)],
        '£': [sprite('blue-brick'), solid(), scale(0.5)],
        'z': [sprite('blue-evil-shroom'), solid(), scale(0.5), 'dangerous'],
        '@': [sprite('blue-surprise'), solid(), scale(0.5), 'coin-surprise'],
        'x': [sprite('blue-steel'), solid(), scale(0.5)],    
      }

      const gameLevel = addLevel(maps[level], levelCfg)
})

start("game", { level: 0, score: 0})