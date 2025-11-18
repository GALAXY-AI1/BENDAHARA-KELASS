// script.js
document.addEventListener('DOMContentLoaded', function(){
  // auto format number input on blur
  document.querySelectorAll('input[name="amount"]').forEach(function(inp){
    inp.addEventListener('input', function(e){
      // allow digits and comma/dot
      this.value = this.value.replace(/[^\d\.,]/g,'');
    });
    inp.addEventListener('blur', function(){
      let v = this.value.replace(',', '.');
      let num = parseFloat(v);
      if (!isNaN(num)) {
        this.value = num.toFixed(2);
      }
    });
  });

  // nice small animation when adding
  let btns = document.querySelectorAll('.btn.primary');
  btns.forEach(b=>{
    b.addEventListener('click', ()=> {
      b.style.transform = 'translateY(-3px)';
      setTimeout(()=> b.style.transform = '', 200);
    });
  });

  // update totalKas on client after small changes? (basic)
  // Additional real-time features can be added later.
});
