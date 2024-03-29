@extends('index')
@section('countryform')
<div class="main_content">
    @if(session('success'))
        <div class="alert alert-success"id="success-alert">
            {{ session('success') }}
        </div>

    @endif
    <form id="myForm" class="form" action="{{route('countrydata')}}" method="post" enctype="multipart/form-data">
        @csrf
        <button class="formsubmission" type="submit"><i class="fa fa-save" style="font-size:24px"></i></button>
        <div class="btn-grid">
            <div class="button_list">
                <div class="maincontent_btn"><li onclick="buttonlist()">Main Content</li></div>
                <div class="Key_points"><li onclick="keypoints()" >Key Points</li></div>
                <div class="Use_case"><li onclick="usecase()" >Country Imports</li></div>
                <div class="Country_partners"><li onclick="countrypartners()" >Country Partners</li></div>
                <div class="sample_data_btn"><li onclick="sampledata()" >Sample Data</li></div>
                <div class="benifits_btn"><li onclick="benifits()" >Benifits</li></div>
                <div class="faq_btn"><li onclick="faq()" >Faq</li></div>
            </div>
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
            <label for="Heading">Main Heading Of Country Page</label>
            <input type="text" name="mf_content_heading" class="main_heading" placeholder="Main Heading" required><br>
            <label for="Meta Tag">Meta Tag</label>
            <input type="text" name="mf_content_metatag" class="main_heading" placeholder="Meta Tag" required><br>
            <label for="Meta Title">Meta Title</label>
            <input type="text" name="mf_content_metatitle" class="main_heading" placeholder="Meta Title" required><br>
            <label for="Meta Description">Meta Description</label>
            <input type="text" name="mf_content_metadescription" class="main_heading" placeholder="Meta Description" required><br>
            <label for="Meta Keywords">Meta Description</label>
            <input type="text" name="mf_content_metakeywords" class="main_heading" placeholder="Meta Keywords" required><br>
            <label for="textarea">Main content paragraph</label>
            <textarea id="mf_content_editordata" name="mf_content_editordata" class="mf_content_para"></textarea>

            <label for="image">Images</label>
            <div class="fileinputcontainerproduct">
                <input type="file" name="mf_content_images" id="imageInput" accept="image/*" multiple="" onchange="displayFileName()" >
                <div class="fileinputcontent">
                    <span id="imageInputspan">Drag and drop image here</span>
                    <span id="imagename"></span>
                    <span>or</span>
                    <button>Upload</button>
                </div>
            </div>
        </div> 
        {{-- Key Points --}}
        <div class="key_points" id="key_points" style="display: none;">
            <h2>Key Points</h2>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages" id="kpimageInput" accept="image/*" multiple="" onchange="displayFileNameone()">
                        <div class="kpimageinput">
                            <span id="kpcurrentSpan">Drag and drop logo </span>
                            <span id="kpinputspan"></span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <label for="Key Points">Key Points Images</label>
                    <input type="text" name="kp_head" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="kpnotes" name="kpeditordata"></textarea>
                </div>
            </div>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages_two" id="kpimageInputtwo" accept="image/*" multiple="" onchange="displayFileNameone()">
                        <div class="kpimageinput">
                            <span id="kpcurrentSpan">Drag and drop logo </span>
                            <span id="kpinputspan"></span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <input type="text" name="kp_head_two" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="kpnotestwo" name="kpeditordata_two"></textarea>
                </div>
            </div>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages_three" id="kpimageInputthree" accept="image/*" multiple="" onchange="displayFileNamethree()">
                        <div class="kpimageinput">
                            <span id="kpcurrentSpanthree">Drag and drop logo </span>
                            <span id="kpinputspanthree"></span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <input type="text" name="kp_head_three" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="kpnotesthree" name="kpeditordata_three"></textarea>
                </div>
            </div>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages_four" id="kpimageInput" accept="image/*" multiple="" onchange="displayFileNameone()">
                        <div class="kpimageinput">
                            <span id="kpcurrentSpan">Drag and drop logo </span>
                            <span id="kpinputspan"></span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <input type="text" name="kp_head_four" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="kpnotesfour" name="kpeditordata_four"></textarea>
                </div>
            </div>
            <div class="kp_wrap">
                <div class="logo">
                    <div class="kpimageinputcontainer">
                        <input type="file" name="kpimages_five" id="kpimageInput" accept="image/*" multiple="" onchange="displayFileNameone()">
                        <div class="kpimageinput">
                            <span id="kpcurrentSpan">Drag and drop logo </span>
                            <span id="kpinputspan"></span>
                            <span>or</span>
                            <button>Upload</button>
                        </div>
                    </div>
                </div>
                <div class="kp_inputs">
                    <input type="text" name="kp_head_five" class="keypoints_heading" placeholder="Keypoints Heading"><br>
                    <label for="textarea">Text Editor for Key Points Paragraph</label><br>
                    <textarea id="kpnotesfive" name="kpeditordata_five"></textarea>
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
            <label for="image">Sample data image</label>
            <input type="file" name="slider_images_one" id="sliderimageInput" accept="image/*" ">
            <label for="image">Upload File</label>
            <input type="file" name="data_file" id="sliderimageInput" accept=".csv,.xls,.xlsx">
            {{-- <label for="image">Slider Image Three</label>
            <input type="file" name="slider_images_three" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Four</label>
            <input type="file" name="slider_images_four" id="sliderimageInput" accept="image/*" ">
            <label for="image">Slider Image Five</label>
            <input type="file" name="slider_images_five" id="sliderimageInput" accept="image/*" "> --}}
        </div>
        {{-- Benifits --}}
        <div class="Benifits" id="benifits" style="display: none;">
            <h2>Benifits</h2>
            <input type="text" name="benifit_heading"  placeholder="Benifit Heading"><br>
            <label for="textarea">Benifit Paragraph</label>
            <textarea id="benifits_para" name="benifit_para"></textarea>
            <label for="textarea">Benifit List</label>
            <textarea id="benifit_list" name="benifit_name"></textarea>
        </div>
        {{-- FAQ --}}
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
