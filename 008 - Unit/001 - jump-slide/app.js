document.addEventListener('DOMContentLoaded', () => {
    const prince = document.querySelector('.character')
    let bottom = 0
    let gravity = 0.9
    let isJumping = false
    let isGoingLeft = false
    let isGoingRight = false
    let left = 0
    let rightTimerId 
    let leftTimerId 
    
    function jump () {
        if (isJumping) return 
        prince.classList.add('character')
        prince.classList.remove('character-sliding')

        isJumping = true
        let timerUpId = setInterval(() => {
            if (bottom > 250) {
                clearInterval(timerUpId)
                let timerDownId = setInterval(() => {
                    if (bottom <= 0) {
                        clearInterval(timerDownId)
                        isJumping = false
                    }
                    bottom -= 5
                    prince.style.bottom = bottom + 'px'        
                })
            }

            bottom += 30
            prince.style.bottom = (bottom * gravity) + 'px'
        }, 20)
        
    }

    function slideLeft () {
        prince.classList.add('character-sliding')
        prince.classList.remove('character')
        
        if (isGoingRight) {
            clearInterval(rightTimerId)
            isGoingRight = false
        }

        if (isGoingLeft) return 
        isGoingLeft = true

        leftTimerId = setInterval(() => {
            left -= 5
            prince.style.left = left + 'px'
        }, 20)

    }

    function slideRight () {
        prince.classList.add('character-sliding')
        prince.classList.remove('character')

        if (isGoingLeft) {
            clearInterval(leftTimerId)
            isGoingLeft = false
        }
        
        if (isGoingRight) return 
        isGoingRight = true

        rightTimerId = setInterval(() => {
            left += 5
            prince.style.left = left + 'px'
        }, 20)

    }    

    // assign function keycodes
    function control (e) {
        switch (e.keyCode) {
            case 38:
                jump()
                break
            case 37:
                slideLeft()
                break      
            case 39:
                slideRight()
                break              
        }
    }

    document.addEventListener('keydown', control)
})