
<fieldset>
    <legend>Settings</legend>
        <aside>
        
        <div class="textFont">
            <label>Change fontSize </label>
            <select class="textS">
                <option value="tiny">Tiny</option>
                <option value="small">Small</option>
                <option value="normal">Normal</option>
                <option value="large">Large</option>
            </select>
        </div>
        <br/>


        <div class="textColor">
            <label for="color">Font Color</label>
            <input type="color" class="colorSwitch">
        </div>
    <br/>

            <div class="backColor">
                <label for="color">Background Color</label>
                <input type="color" class="backSwitch">
            </div>
            
    <br>
    </aside>
</fieldset>


<script type="text/javascript">
         /**background color */
         const color = document.querySelector(".backSwitch");
        color.onchange = function(){
            document.body.style.backgroundColor= this.value;
        }

        /**textColor */
        const textColor = document.querySelector(".colorSwitch");
        textColor.onchange = function(){
            document.querySelector("*").style.color = this.value;
        }
        /**text fontSize */
        const text = document.querySelector(".textS");
        text.oninput = function(){
            // alert(this.value);
           switch(this.value){
               case "tiny":
                document.querySelector("*").style.fontSize = "9px";
                break;

                case "small":
                document.querySelector("*").style.fontSize = "14px";
                break;

                case "normal":
                document.querySelector("*").style.fontSize = "17px";
                break;

                case "large":
                document.querySelector("*").style.fontSize = "30px";
                break;
           }
        }
     </script>
