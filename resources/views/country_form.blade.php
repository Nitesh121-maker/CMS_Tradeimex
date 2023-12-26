@extends('index')
@section('countryform')
<div class="main_content">
    <form class="form" action="" method="post">
        <button class="formsubmission" type="submit"><i class="fa fa-save" style="font-size:24px"></i></button>
        <div class="button_list">
            <div class="maincontent_btn"><li onclick="buttonlist()">Main Content</li></div>
            <div class="Key_points"><li onclick="keypoints()" >Key Points</li></div>
            <div class="Use_case"><li onclick="usecase()" >Use Case</li></div>
            <div class="Country_partners"><li onclick="countrypartners()" >Country Partners</li></div>
            <div class="sample_data_btn"><li onclick="sampledata()" >Sample Data</li></div>
            <div class="benifits_btn"><li onclick="benifits()" >Benifits</li></div>
            <div class="faq_btn"><li onclick="faq()" >Faq</li></div>
        </div>
     
        <div class="main_form_content" id="main_content">

            <h2>Main Content</h2>
            <select name="country_values" id="">
                @foreach ($data as $country)
                  <option value="{{$country}}">{{$country}}</option>
                @endforeach
            </select>
            <input type="text" name="main_form_content_heading" class="main_heading" placeholder="Main Heading"><br>
            <input type="text" name="main_form_content_metatag" class="main_heading" placeholder="Meta Tag"><br>
            <input type="text" name="main_form_content_metatitle" class="main_heading" placeholder="Meta Title"><br>
            <input type="text" name="main_form_content_metadescription" class="main_heading" placeholder="Meta Description"><br>
            <input type="text" name="main_form_content_metakeywords" class="main_heading" placeholder="Meta Keywords"><br>
            <textarea id="summernote" name="main_form_content_editordata"></textarea>
            <div class="fileinputcontainerproduct">
                <input type="file" name="main_form_content_images" id="imageInput" accept="image/*" multiple="">
                <div class="fileinputcontent">
                    <span>Drag and drop image here</span>
                    <span>or</span>
                    <button>Upload</button>
                </div>
            </div>
        </div> 
        <div class="key_points" id="key_points" style="display: none;">
            <h2>Key Points</h2>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages" id="imageInput" accept="image/*" multiple="">
                        <div class="kpimageinput">
                            <span>Drag and drop logo </span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <input type="text" name="kp_head" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="summernotes" name="kpeditordata"></textarea>
                </div>
            </div>
        </div>  
        <div class="use_case" id="use_case" style="display: none;">
            <h2>Use Case</h2>
            <input type="text" name="uc_heading" class="use_case_heading" placeholder="Use Case Heading"><br>
            <label for="textarea">Text Editor for paragraph</label><br>
            <textarea id="summernoteusecase" name="uc_para"></textarea>
            <label for="textarea">Text Editor for Top Ten Product</label><br>
            <textarea id="summernoteusecaseproduct" name="uc_product"></textarea>
        </div>
        <div class="country_parteners" id="country_parteners" style="display: none;">
            <h2>Country Partners</h2>
            <input type="text" name="cp_heading"  placeholder="Country Partner Heading"><br>
            <label for="textarea">Country Partners Paragraph</label>
            <textarea id="country_partner_para" name="cp_para"></textarea>
            <label for="textarea">Country Partners Name</label>
            <textarea id="country_partner_name" name="cp_name"></textarea>
        </div>
        <div class="sample_data" id="sample_data" style="display: none;">
            <h2>sample Data</h2>
            <h3>Slider Images</h3>
            <label for="image">Slider Image One</label>
            <input type="file" name="slider_images_one" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Two</label>
            <input type="file" name="slider_images_two" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Three</label>
            <input type="file" name="slider_images_three" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Four</label>
            <input type="file" name="slider_images_four" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Five</label>
            <input type="file" name="slider_images_five" id="sliderimageInput" accept="image/*" ">
        </div>
        <div class="Benifits" id="benifits" style="display: none;">
            <h2>Benifits</h2>
            <input type="text" name="benifit_heading"  placeholder="Benifit Heading"><br>
            <label for="textarea">Benifit Paragraph</label>
            <textarea id="benifits_para" name="benifit_para"></textarea>
            <label for="textarea">Benifit List</label>
            <textarea id="benifit_list" name="benifit_name"></textarea>
        </div>
        <div class="faq" id="faq" style="display: none;">
            <h2>FAQ</h2>
            <input type="text" name="Faq_heading_one"  placeholder="Faq Heading One"><br>
            <label for="textarea">Faq Paragraph One</label>
            <textarea id="Faq_para_one" name="Faq_para_one"></textarea>
            <input type="text" name="Faq_heading_two"  placeholder="Faq Heading Two"><br>
            <label for="textarea">Faq Paragraph Two</label>
            <textarea id="Faq_para_two" name="Faq_para_two"></textarea>
            <input type="text" name="Faq_heading_three"  placeholder="Faq Heading three"><br>
            <label for="textarea">Faq Paragraph Three</label>
            <textarea id="Faq_para_three" name="Faq_para_three"></textarea>
            <input type="text" name="Faq_heading_four"  placeholder="Faq Heading four"><br>
            <label for="textarea">Faq Paragraph Four</label>
            <textarea id="Faq_para_four" name="Faq_para_four"></textarea>
            <input type="text" name="Faq_heading_five"  placeholder="Faq Heading five"><br>
            <label for="textarea">Faq Paragraph Five</label>
            <textarea id="Faq_para_five" name="Faq_para_five"></textarea>
        </div>
    </form>
</div>  

@endsection
