
document.addEventListener("DOMContentLoaded", function () {
  tinymce.init({
    selector: 'textarea',
    valid_elements: 'p[style],strong,em,li',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    content_style: 'ul { list-style-type: none; }', 
    content_style: 'li { list-style-type: none; }',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
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
  // Continent 
  function main_content_continent() {
    let maincontent =document.getElementById('main_content_continent');
    let continent_imports     =document.getElementById('continent_imports');
    let sampledata = document.getElementById('sample_data_continent')
    let continent_parteners = document.getElementById('continent_parteners');

    if (maincontent.style.display === "none") {
        maincontent.style.display = "block";
        continent_imports.style.display     = "none";
        continent_parteners.style.display = "none";
        sampledata.style.display       = "none";

    }
  }
  function continent_imports() {
    let maincontent =document.getElementById('main_content_continent');
    let continent_imports     =document.getElementById('continent_imports');
    let sampledata = document.getElementById('sample_data_continent')
    let continent_parteners = document.getElementById('continent_parteners');
    if(continent_imports.style.display === "none"){
        maincontent.style.display           = "none";
        continent_imports.style.display     = "block";
        continent_parteners.style.display   = "none";
        sampledata.style.display            = "none";
    }
  }
  function continent_parteners() {
    let maincontent =document.getElementById('main_content_continent');
    let continent_imports     =document.getElementById('continent_imports');
    let sampledata = document.getElementById('sample_data_continent')
    let continent_parteners = document.getElementById('continent_parteners');
    if(continent_parteners.style.display === "none"){
        continent_parteners.style.display = "block";
        maincontent.style.display      = "none";
        continent_imports.style.display= "none";
        sampledata.style.display       = "none";

    }
  }
  function sampledatacontinent() {
    let maincontent =document.getElementById('main_content_continent');
    let continent_imports     =document.getElementById('continent_imports');
    let sampledata = document.getElementById('sample_data_continent')
    let continent_parteners = document.getElementById('continent_parteners');
    if(sampledata.style.display === "none"){
        sampledata.style.display       = "block";
        continent_imports.style.display = "none";
        maincontent.style.display      = "none";
        continent_parteners.style.display          = "none";

    }
  }

function displayFileName() {
    let sliderimageInput = document.getElementById("imageInput");
    var currentSpan      = document.getElementById("imageInputspan");
    var displayspan      = document.getElementById("imagename")

    if (sliderimageInput.files && sliderimageInput.files.length > 0) {
        currentSpan.style.display = 'none';
        for (let i= 0; i< sliderimageInput.files.length; i++) {
        
            displayspan.textContent += sliderimageInput.files[i].name + " ";

        }
      } else {
        displayspan.textContent = "Drag and drop files here";
      }
}
function displayFileNameone() {
  let sliderimageInput = document.getElementById("kpimageInput");
  var currentSpan      = document.getElementById("kpcurrentSpan");
  var displayspan      = document.getElementById("kpinputspan")

  if (sliderimageInput.files && sliderimageInput.files.length > 0) {
      currentSpan.style.display = 'none';
      for (let i= 0; i< sliderimageInput.files.length; i++) {
      
          displayspan.textContent += sliderimageInput.files[i].name + " ";

      }
    } else {
      displayspan.textContent = "Drag and drop files here";
    }
}