@extends('index')
@section('continentform')
<div class="main_content">
    <form class="form" action="{{route('countrydata')}}" method="post">
        @csrf
        <button class="formsubmission" type="submit"><i class="fa fa-save" style="font-size:24px"></i></button>
        <div class="button_list">
            <div class="maincontent_btn"><li onclick="buttonlist()">Main Content</li></div>
            <div class="Key_points"><li onclick="keypoints()" >Key Points</li></div>
            <div class="Use_case"><li onclick="usecase()" >Country Imports</li></div>
            <div class="Country_partners"><li onclick="countrypartners()" >Country Partners</li></div>
            <div class="sample_data_btn"><li onclick="sampledata()" >Sample Data</li></div>
            <div class="benifits_btn"><li onclick="benifits()" >Benifits</li></div>
            <div class="faq_btn"><li onclick="faq()" >Faq</li></div>
        </div>

        <div class="main_form_content" id="main_content">
            <select name="Datatype" id="">
                <option value="">Select Data Type</option>
                <option value="import">Import</option>
                <option value="export">Export</option>
            </select>
            <h2>Main Content</h2>
            <select name="country_values" id="">
                @foreach ($data as $country)
                  <option value="{{$country}}">{{$country}}</option>
                @endforeach
            </select>
            <input type="text" name="mf_content_heading" class="main_heading" placeholder="Main Heading" required><br>
            <input type="text" name="mf_content_metatag" class="main_heading" placeholder="Meta Tag" required><br>
            <input type="text" name="mf_content_metatitle" class="main_heading" placeholder="Meta Title" required><br>
            <input type="text" name="mf_content_metadescription" class="main_heading" placeholder="Meta Description" required><br>
            <input type="text" name="mf_content_metakeywords" class="main_heading" placeholder="Meta Keywords" required><br>
            <label for="textarea">Main content paragraph</label>
            <textarea id="summernote" name="mf_content_editordata"></textarea>
            <label for="image">Images</label>
            <div class="fileinputcontainerproduct">
                <input type="file" name="mf_content_images" id="imageInput" accept="image/*" multiple="" onchange="displayFileName()">
                <div class="fileinputcontent">
                    <span id="imageInputspan">Drag and drop image here</span>
                    <span id="imagename"></span>
                    <span>or</span>
                    <button>Upload</button>
                </div>
            </div>
        </div> 

        {{-- Imports --}}
        <div class="use_case" id="use_case" style="display: none;">
            <h2>Top Ten Imports</h2>
            <input type="text" name="uc_heading" class="use_case_heading" placeholder="Imports Heading"><br>
            <label for="textarea">Text Editor for paragraph</label><br>
            <textarea id="summernoteusecase" name="uc_para"></textarea>
            <label for="textarea">Text Editor for Top Ten Product</label><br>
            <textarea id="summernoteusecaseproduct" name="uc_product"></textarea>
        </div>
        {{-- Country Partners --}}
        <div class="country_parteners" id="country_parteners" style="display: none;">
            <h2>Country Partners</h2>
            <input type="text" name="cp_heading"  placeholder="Country Partner Heading"><br>
            <label for="textarea">Country Partners Paragraph</label>
            <textarea id="country_partner_para" name="cp_para"></textarea>
            <label for="textarea">Country Partners Name</label>
            <textarea id="country_partner_name" name="cp_name"></textarea>
        </div>
        {{-- Sample Data --}}
        <div class="sample_data" id="sample_data" style="display: none;">
            <h2>sample Data</h2>
            <input type="text" name="sd_heading"  placeholder="Sample Data Heading"><br>
            <label for="textarea">Country Partners Paragraph</label>
            <textarea id="sd_para" name="sd_para"></textarea>

            <label for="image">Upload File</label>
            <input type="file" name="data_file" id="sliderimageInput" accept=".csv,.xls,.xlsx">
            <label for="image">Slider Image One</label>
            <input type="file" name="slider_images_one" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image TWo</label>
            <input type="file" name="slider_images_two" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Three</label>
            <input type="file" name="slider_images_three" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Four</label>
            <input type="file" name="slider_images_four" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Five</label>
            <input type="file" name="slider_images_five" id="sliderimageInput" accept="image/*" ">
        </div>

      
    </form>
</div>  

@endsection
