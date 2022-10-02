"use strict";const grid={buttons:{text:{add:"Add column",remove:"Remove column"},target:"#grid article"},grid:{current:4,min:1,max:12,gridTarget:"#grid .grid",codeTarget:"#grid pre code"},init(){this.addButtons(),this.generateGrid()},addButtons(){var t=document.createElement("P");t.innerHTML=`
      <button class="secondary add">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12">'</line>
        </svg>
        ${this.buttons.text.add}
      </button>

      <button class="secondary remove">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        ${this.buttons.text.remove}
      </button>`,document.querySelector(this.buttons.target).before(t),document.querySelector("#grid button.add").addEventListener("click",()=>{this.addColumn()},!1),document.querySelector("#grid button.remove").addEventListener("click",()=>{this.removeColumn()},!1)},generateGrid(){let e="",r='&lt;<b>div</b> <i>class</i>=<u>"grid"</u>&gt;\n';for(let t=0;t<this.grid.current;t++)e+="<div>"+(t+1)+"</div>",r+="  &lt;<b>div</b>&gt;"+(t+1)+"&lt;/<b>div</b>&gt;\n";r+="&lt;/<b>div</b>&gt;",document.querySelector(this.grid.gridTarget).innerHTML=e,document.querySelector(this.grid.codeTarget).innerHTML=r},addColumn(){this.grid.current<this.grid.max&&(this.grid.current++,this.generateGrid())},removeColumn(){this.grid.current>this.grid.min&&(this.grid.current--,this.generateGrid())}};grid.init();