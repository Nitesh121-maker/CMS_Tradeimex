
$(document).ready(function() {
    $('#summernote').summernote();
  });
  $(document).ready(function() {
    $('#summernotes').summernote();
  });
  $(document).ready(function() {
    $('#summernoteusecase').summernote();
  });
  $(document).ready(function() {
    $('#summernoteusecaseproduct').summernote();
  });
  $(document).ready(function() {
    $('#country_partner_para').summernote();
  });
  $(document).ready(function() {
    $('#country_partner_name').summernote();
  });

  $(document).ready(function() {
    $('#benifits_para').summernote();
  });
  $(document).ready(function() {
    $('#benifit_list').summernote();
  });

  $(document).ready(function() {
    $('#Faq_para_one').summernote();
  });
  $(document).ready(function() {
    $('#Faq_para_two').summernote();
  });
  $(document).ready(function() {
    $('#Faq_para_three').summernote();
  });
  $(document).ready(function() {
    $('#Faq_para_four').summernote();
  });
  $(document).ready(function() {
    $('#Faq_para_five').summernote();
  });
  function buttonlist() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let sampledata = document.getElementById('sample_data')
    let countryparteners = document.getElementById('country_parteners');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if (maincontent.style.display === "none") {
        maincontent.style.display = "block";
        keypoints.style.display   = "none";
        usecase.style.display     = "none";
        countryparteners.style.display = "none";
        sampledata.style.display       = "none";
        benifits.style.display         = "none";
        faq.style.display              = "none";
    }
  }
  function keypoints() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let sampledata = document.getElementById('sample_data');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if( keypoints.style.display === "none"){
        maincontent.style.display = "none";
        keypoints.style.display   = "block";
        usecase.style.display     = "none";
        countryparteners.style.display = "none";
        sampledata.style.display       = "none";
        benifits.style.display         = "none";
        faq.style.display              = "none";
    }
  }
  function usecase() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let sampledata = document.getElementById('sample_data');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if(usecase.style.display === "none"){
        maincontent.style.display = "none";
        keypoints.style.display   = "none";
        usecase.style.display     = "block";
        countryparteners.style.display = "none";
        sampledata.style.display       = "none";
        benifits.style.display         = "none";
        faq.style.display              = "none";
    }
  }
  function countrypartners() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let benifits = document.getElementById('benifits');
    let sampledata = document.getElementById('sample_data');
    let faq = document.getElementById('faq');
    if(countryparteners.style.display === "none"){
        countryparteners.style.display = "block";
        maincontent.style.display      = "none";
        keypoints.style.display        = "none";
        usecase.style.display          = "none";
        sampledata.style.display       = "none";
        benifits.style.display         = "none";
        faq.style.display              = "none";
    }
  }
  function sampledata() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let sampledata = document.getElementById('sample_data');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if(sampledata.style.display === "none"){
        sampledata.style.display       = "block";
        countryparteners.style.display = "none";
        maincontent.style.display      = "none";
        keypoints.style.display        = "none";
        usecase.style.display          = "none";
        benifits.style.display         = "none";
        faq.style.display              = "none";
    }
  }
  function benifits() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let sampledata = document.getElementById('sample_data');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if(benifits.style.display === "none"){
        benifits.style.display       = "block";
        sampledata.style.display       = "none";
        countryparteners.style.display = "none";
        maincontent.style.display      = "none";
        keypoints.style.display        = "none";
        usecase.style.display          = "none";
        usecase.style.display          = "none";
        faq.style.display              = "none";
    }
  }
  function faq() {
    let maincontent =document.getElementById('main_content');
    let keypoints   =document.getElementById('key_points');
    let usecase     =document.getElementById('use_case');
    let countryparteners = document.getElementById('country_parteners');
    let sampledata = document.getElementById('sample_data');
    let benifits = document.getElementById('benifits');
    let faq = document.getElementById('faq');
    if(faq.style.display === "none"){
     
        benifits.style.display         = "none";
        sampledata.style.display       = "none";
        countryparteners.style.display = "none";
        maincontent.style.display      = "none";
        keypoints.style.display        = "none";
        usecase.style.display          = "none";
        usecase.style.display          = "none";
        faq.style.display              = "block";
    }
  }
function displayFileName() {
    let sliderimageInput = document.getElementById("sliderimageInput");
    var displayspan      = document.getElementById("sliderinputspan")

    if (sliderimageInput.files && sliderimageInput.files.length > 0) {
    
        for (let i= 0; i< sliderimageInput.files.length; i++) {
        
            displayspan.textContent += sliderimageInput.files[i].name + ", ";

        }
      } else {
        displayspan.textContent = "Drag and drop files here";
      }
}