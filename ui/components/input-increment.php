<div class="input--increment">
  <button class="minus"
          type="button">-</button>
  <input type="number"
         value="1"
         min="1"
         max="100"
         step="1"
         />
  <button class="plus"
          type="button">+</button>
</div>

<style>
    .input--increment {
    --border-radius: 5px;
    --border-color: #A9A9A9;
    display: flex;
    border-radius: var(--border-radius);
    }
    .input--increment button {
    padding: 10px;
    border: none;
    border: 1px solid var(--border-color);
    }
    .input--increment button.minus {
    border-radius: var(--border-radius) 0 0 var(--border-radius);   
    }
    .input--increment button.plus {
    border-radius: 0 var(--border-radius) var(--border-radius) 0;   
    }

    .input--increment input[type=number] {
    text-align: center;
    width: 35px;
    border-radius: 0;
    -moz-appearance: textfield;
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
    border-left: none;
    border-right: none;
    }
    /* Hide arrows from number input */
    .input--increment input::-webkit-outer-spin-button,
    .input--increment input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
</style>

<script>
    let incrementBtns = document.querySelectorAll('.input--increment > button');

    function incrementField(e) {
        let clickedBtn = e.target;
        let numberInp  = clickedBtn.parentElement.querySelector('input');
        
        let newVal = numberInp.value;
        if(clickedBtn.classList.contains('minus')) 
        {
            newVal--;
        }
        else if(clickedBtn.classList.contains('plus')) 
        {
            newVal++;
        }

        if(numberInp.min.length && newVal < numberInp.min) 
        {
            newVal = numberInp.min;
        }
        if(numberInp.max.length && newVal > numberInp.max) 
        {
            newVal = numberInp.max;
        }

        numberInp.value = newVal;

    }


    for(i = 0; i <= incrementBtns.length; i++) 
    {
        incrementBtns[i].addEventListener('click', (e) => incrementField(e));   
    }
</script>