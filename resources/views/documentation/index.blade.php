@extends('documentation.app') 
@section('title','Documentation') @section('content')
<div class="content-wrapper mt-0">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="_card p-3">
                        <div id="documenter_content">
                            <div id="start">
                                <h1>Dynamic Portfolio</h1>
                                <h3 class="version_title">Dynamic Portfolio - Version 1.0.1</h3>
                                 
                                <hr>
                                <p class="text-justify">If you have any questions and You face any kind of problem during installation phase of Dynamic Portfolio - <strong>Do Not Worry - We are here to help you!! Contact us directly at below information</strong>
                                    <br>
                                </p>
                                <p>E-mail Address : <b>ismail32cse@gmail.com</b></p>
                            </div>

                            <div id="Features" class="mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">System Features</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="border-bottom">Dynamic Portfolio Management System </h5>
                                    </div>
                                    <div class="col-12">
                                       Premium Multiuser /  Multi-Template Resume Manager is a great choice for individual as well as for multiple users, which helps you to create avivid, impressive and professional online Resume and Personal Site Manager, where you can add all about your information like biodata, education, experience, portfolio, testimonials, and contact information with Google map presence.
 
                                        It’s extremely simple in configuration! Just download and install in a few minutes, No Technical Skills needed, you can update the contents with user friendly robust admin and show your online presence to your friend, customer or employer in an interview by phone or tablet. Because our all templates are responsive and efficiently work on mobiles, you can view your website on pc as well as handheld devices. You can also link to your social profiles like facebook, twitter, youtube, skype googleplus etc
                                        <br> <br>
                                    </div>
                                    <div class="col-md-5 border-left ml-4">
                                        <ul>
                                            <li class="border-bottom">Education Management</li>
                                            <li class="border-bottom">Scholarship Management</li>
                                            <li class="border-bottom">Skills Management</li>
                                            <li class="border-bottom">Experience Management</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 border-left">
                                        <ul>
                                            <li class="border-bottom">Portfolio Management</li>
                                            <li class="border-bottom">Message Management</li>
                                            <li class="border-bottom">Testimonial Management</li>
                                            <li class="border-bottom">Side Setting </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="install">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Installation</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <h5>Minimal Requirements</h5>
                                        <ul>
                                            <li>PHP &gt;= 7.1.3</li>
                                            <li>OpenSSL PHP Extension</li>
                                            <li>PDO PHP Extension</li>
                                            <li>Mbstring PHP Extension</li>
                                            <li>Tokenizer PHP Extension</li>
                                            <li>XML PHP Extension</li>
                                            <li>Ctype PHP Extension</li>
                                            <li>JSON PHP Extension</li>
                                            <li>BCMath PHP Extension</li>
                                        </ul>

                                        <h5>Follow these steps to install Dynamic Portfolio.</h5>
                                        <ul>
                                            <strong>Step 1</strong>
                                            <li>Unzip the downloaded folder</li>
                                            <li>Copy the files from inside the folder : " Dynamic_Portfolio " into your server</li>
                                            <strong>Step 2</strong>
                                            <li>Create Database, Database Username, Password.</li>
                                            <li>Then go to Your Server phpMyAdmin.</li>
                                            <li>import " <b>dynamic_portfolio_db.sql</b> " to database.</li>
                                            <strong>Step 3</strong>
                                            <li>Go to root folder open .env file </li>
                                            <li>
                                                DB_DATABASE= "Database Name"
                                                <br> DB_USERNAME= "Database User Name"
                                                <br> DB_PASSWORD= "Database password"
                                            </li>
                                            <li>All Done!</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-7">
                                        <p><strong>Installation Step</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/phpMyAdmin.png') }}" width="">
                                    </div>
                                </div>
                            </div>

                            <div id="login">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Login Details</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify">To log-in to admin panel - please use the following login credentials provided below.</p>
                                        <p class="text-justify">
                                            <strong class="text-danger">Please Note:</strong> If System Installed successfully then you find home page of portfolio by browsing your domain. if face any problem check previous step again and retry. make sure your php have 7.2  version installed. if still problem exist you may contact us at <b>ismail32cse@gmail.com</b>, we will reply you as soon as possible.
                                            <br>
                                            <br>

                                        </p>
                                    </div>

                                    <div class="col-md-7">
                                        <strong>The login credentials provided below are for initial usage only - do not forget to update your password after first successful login.</strong>
                                        <p>After login to admin panel, you can manage your portfolio</p>
                                        <div class="row">
                                            <div class="col-12">

                                            </div>
                                            <div class="col-sm-4">
                                                <p><strong>UserID : <span class="text-danger">admin@email.com</span> </strong> </p>
                                                <p><strong>Password : <span class="text-danger">11111111</span></strong> </p>
                                            </div>
                                            <div class="col-sm-8">
                                                <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/login.jpg')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="admin_dashboard" class="pb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Admin Dashboard</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <ul>
                                            <li>Education</li>
                                            <li>Scholarship</li>
                                            <li>Skills</li>
                                            <li>Experience</li>
                                            <li>Portfolio</li>
                                            <li>Setting</li>
                                            <li>Message</li>
                                            <li>Testimonial</li>
                                        </ul>

                                    </div>

                                    <div class="col-md-7">
                                        <p><strong>Administrator Dashabord</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Dashboard.png')}}"> </li>

                                    </div>
                                </div>
                            </div>

                            <div id="education">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Education</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                        <p>Manage Education in the system is very easy</p>
                                        <ul>
                                            <li><strong>Add New Education</strong></li>
                                            <p class="text-justify"> Go to <strong>'Education'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Education List</strong></li>
                                            <p class="text-justify"> You can see list of all Education.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>

                                        </ul>        
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>        
                                    </div>

                                    <div class="col-md-6">
                                        <strong>Add Education Step</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Education Step List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div id="scholarship">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Scholarship</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                        <p>Manage Scholarship in the system is very easy</p>
                                        <ul>
                                            <li><strong>Add New Scholarship</strong></li>
                                            <p class="text-justify"> Go to <strong>'Scholarship'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Scholarship List</strong></li>
                                            <p class="text-justify"> You can see list of all Scholarship.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>                                        
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Add Scholarship</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Scholarship List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div id="skill">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Skills</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                        <p>Manage Skills in the system is very easy</p>
                                        <ul>
                                            <li><strong>Add New Skills</strong></li>
                                            <p class="text-justify"> Go to <strong>'Skills'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Skills List</strong></li>
                                            <p class="text-justify"> You can see list of all Skills.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>                                        
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Add Skills</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Skills List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="experience">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                           <h3 class="border-bottom mt-5">Experience</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                        <p>Manage Experience in the system is very easy</p>
                                        <ul>
                                            <li><strong>Add New Experience</strong></li>
                                            <p class="text-justify"> Go to <strong>'Experience'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Experience List</strong></li>
                                            <p class="text-justify"> You can see list of all Experience.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>                                        
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Add Experience</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Experience List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="portfolio">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Portfolio</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>
                                            Adding a new Portfolio in the system is very easy<br>
                                            First, You should Create <strong>'Category'</strong> for create portfolio
                                        </p>

                                        <ul>
                                            <li><strong>Add New Category</strong></li>
                                            <p class="text-justify"> Go to <strong>'Category'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Category List</strong></li>
                                            <p class="text-justify"> You can see list of all Category.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>

                                    <div class="col-md-6">
                                        <strong>Add Category</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Category List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                    <div class="col-md-12 mt-4">
                                    <strong>After then </strong>
                                        <p class="m-0">
                                            <p class="text-justify"> Go to <strong>'Portfolio'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                        </p>
                                        <ul>
                                            <li><strong>Add New Portfolio</strong></li>
                                            <p class="text-justify"> You can easily add new Portfolio in the system. </p>

                                            <li><strong>Portfolio List</strong></li>
                                            <p class="text-justify"> You can see list of all Portfolio.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Add Portfolio</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}"> </li>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Portfolio List</strong>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="setting">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                           <h3 class="border-bottom mt-5">Setting</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                       <p>Manage Setting in the system is very easy</p>
                                        <ul>
                                            <li><strong>General Settings</strong></li>
                                            <p class="text-justify"> Go to <strong> 'Settings' > 'General Settings' </strong>Edit Form Carefully. click <strong>'Update'</strong>
                                                <br>
                                                <strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong>
                                            </p>
                                            <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Company-info.png')}}">

                                            <li class="mt-4"><strong>Profile Setting</strong></li>
                                            <p class="text-justify"> Go to <strong> 'Settings' > 'Profile' </strong>Edit Form Carefully. click <strong>'Update'</strong>
                                                <br>
                                                <strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong>
                                            </p>
                                            <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Company-info.png')}}">

                                            <li class="mt-4"><strong>Social media</strong></li>
                                            <p class="text-justify"> Go to <strong> 'Settings' > 'Social media' </strong>Edit Form Carefully. click <strong>'Update'</strong>
                                                <br>
                                                <strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong>
                                            </p>
                                            <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Company-info.png')}}">
                                        </ul>                                  
                                    </div>                                    
                                </div>
                            </div>

                            <div id="message">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Message</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Manage Message in the system is very easy</p>
                                        <ul>
                                            <li><strong>Show Message</strong></li>
                                            <p class="text-justify"> Go to <strong>'Message'</strong>  then you can see message list.This people want to contact with you from your portfolio contact form. You can See Detail of Message from here</p>
                                        </ul>                    
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Add Expense Invoice</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddExpense.png')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Add Expense Invoice</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddExpense.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="testimonial">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                           <h3 class="border-bottom mt-5">Testimonial</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 border-right">
                                        <p>Manage Testimonial in the system is very easy</p>
                                        <ul>
                                            <li><strong>Add New Testimonial</strong></li>
                                            <p class="text-justify"> Go to <strong>'Testimonial'</strong> > <strong>'+Add New'</strong> Fillup Form. click <strong>'Create New'</strong></p>
                                            <li><strong>Testimonial List</strong></li>
                                            <p class="text-justify"> You can see list of all Testimonial.  You Can <strong>Edit</strong>, <strong>Delete</strong> From here</p>
                                        </ul>                                        
                                        <p class="text-center"><strong>Note: <span class="text-danger">Start ( * )</span> marked field are required.</strong></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Add Loan</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddLoan.png')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Loans List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/LoansList.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="customer_support">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Customer Support</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-justify"><strong>All the support related issue should be emailed directly to <span class="text-danger">ismail32cse@gmail.com</span> Please be informed that CodeCanyon comments page isn't for support.</strong>
                                            <br>Support is available from 6:00 PM - 1:00 AM (GMT+6), Sunday - Thursday. If you are having any difficulty in understanding the product or you have any question, We encourage you to contact us. Email us at <strong><span class="text-danger">ismail32cse@gmail.com</span></strong> for fast response. We will be glad to help you. </p>

                                    </div>

                                </div>

                            </div>

                            <div id="product_customization">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3 class="border-bottom mt-5">Product Customization</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-justify"> <strong>Dynamic Portfolio can be customize depending on your need. Our charges are affordable.</strong> We work and charge for customization as <span class="font-weight-bold text-danger">$12/hour</span>.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection