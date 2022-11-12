
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
         var element = document.getElementById("next-step-none");
         var anotherelement = document.getElementById("col-twilave");
         var marginLeft = document.getElementById("col-twilave");
         var nextBtnformargin = document.getElementById("nextBtnformargin");
        element.classList.remove("mystyle");
        anotherelement.classList.remove("col-md-12");
        marginLeft.classList.remove("marginLeft");
        nextBtnformargin.classList.remove("nextBtnformargin");
        document.getElementById("prevBtn").style.display = "none";
      }else {
        var element = document.getElementById("next-step-none");
        var anotherelement = document.getElementById("col-twilave");
        var marginLeft = document.getElementById("col-twilave");
        var nextBtnformargin = document.getElementById("nextBtnformargin");
      
        element.classList.add("mystyle");
        anotherelement.classList.add("col-md-12");
        marginLeft.classList.add("marginLeft");
        nextBtnformargin.classList.add("nextBtnformargin");
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    function nextPrev(n) {

      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
        x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
         currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
      // ... the form gets submitted:

        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      donateAmount = document.getElementsByName("donateAmount");
       sixty =  document.getElementById("sixty");
      hunderdthirty =  document.getElementById("hunderdthirty");
      twohunderdtwentyfive =  document.getElementById("twohunderdtwentyfive");
      y = x[currentTab].getElementsByClassName("required");
      // A loop that checks every input field in the current tab:

       var selector = $("input[name='donateAmount']:checked").val();
       if(selector){
        
        $('#donate_amount_of_number').val(selector);
        return valid;
      }


        for (i = 0; i < y.length; i++) {
          
          // If a field is empty...
          if (y[i].value == "") {
          // add an "invalid" class to the field:
            y[i].className += " invalid";
          // and set the current valid status to false
           valid = false;
          }
        }
      
    // If the valid status is true, mark the step as finished and valid:
      if (valid) {

        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      var  enterAmount = $('#enterAmount').val();
      $('#donate_amount_of_number').val(enterAmount);
      return valid; // return the valid status

    }
    
    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";

    }
      
  $(document).ready(function(){
    // Gold
    $('#calculate').click(function(){
        var no_zakat = 85;
        var zakat_grm = $('#zakat_grn').val();
        var zakat_gold_year = $('#zakat-gold-year').val();
        if( zakat_grm <= no_zakat){
          $('#showdata').text('No Zakat');
        }else{
          var discount = 2.5;
          var percentage = zakat_grm * zakat_gold_year / 100;
          var total_amount = percentage * 48.63;
          //Set
          $('#showdata').text("USD : "+parseInt(total_amount)).toFixed(2);
        }
    });

  // Silver
  $('#calculate_silver').click(function(){
      var no_zakat_silver = 599;
        var zakat_gold_year = $('#zakat-gold-year').val();
      var zakat_silver = $('#silver_zakat').val();
      if( zakat_silver <= no_zakat_silver){
        $('#showdata_silve').text('No Zakat');
      }else{
        var discount_silver = 2.5;
        var percentage_selver = zakat_silver * zakat_gold_year / 100;
        var total_amount_silver = percentage_selver * 0.55;
        //Set
        $('#showdata_silve').text("Silver Zakat : USD "+parseInt(total_amount_silver)).toFixed(2);
      }   
  });

  // amount
  $('#calculate_money').click(function(){
      var no_zakat_amount = 329;
      var zakat_money = $('#zakat_money').val();
      var zakat_gold_year = $('#zakat-gold-year').val();
      if( zakat_money <= no_zakat_amount){
        $('#showdata_money').text('No Zakat');
      }else{
        var discount_silver = 2.5;
        var percentage_money = zakat_money * zakat_gold_year / 100;
        var total_amount_silver = percentage_money * 0.55;
        //Set
        $('#showdata_money').text("Money Zakat : USD "+parseInt(percentage_money)).toFixed(2);
      }
  });

// stoke
  $('#calculate_stoke').click(function(){
    var no_zakat_stoke = 329;
    var zakat_stoke = $('#zakat_stoke').val();
    var zakat_gold_year = $('#zakat-gold-year').val();
    if( zakat_stoke <= no_zakat_stoke){
        $('#showdata_stoke').text('No Zakat');
    }else{
      var percentage_stoke = zakat_stoke * zakat_gold_year / 100;
      //Set
      $('#showdata_stoke').text("Stoke Zakat : USD "+parseInt(percentage_stoke)).toFixed(2);
    }
  });
});

$(document).ready(function(){
  $("#sixty").click(function(){
    $("#sixty").prop("checked", true);
  });
  $("#hunderdthirty").click(function(){
    $("#hunderdthirty").prop("checked", true);
  });
  $("#twohunderdtwentyfive").click(function(){
    $("#hunderdthirty").prop("checked", true);
  });
});


$(document).ready(function() {
  $("input[name$='cars']").click(function() {
    var test = $(this).val();
    $("div.desc").hide();
    $("#Cars" + test).show();
  });
});


// Donate button
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



//  Main Menu animate
function animateToDom(event, id) {
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    event.preventDefault();
    var pos = $id.offset().top - $('#top').height() - 100;
    $('body, html').animate({ scrollTop: pos });
}

// main menu
function animateHashLinks() {
    $(document).on('click', 'a', function(event) {
        var id = $(this).attr('href');

        animateToDom(event, id);
    });

    if (window.location.hash) {
        var hashValue = window.location.hash;

        if (hashValue.length > 4) {
            setTimeout(() => {
                animateToDom(new Event('click'), hashValue);
            }, 1000);
        }
    }
}


jQuery(document).ready(function($) {
  animateHashLinks();
});

$(document).on('click', '.caret-icon', function() {
  alert('sfsf');
   $(this).toggleClass('fa-caret-right fa-caret-down');
})