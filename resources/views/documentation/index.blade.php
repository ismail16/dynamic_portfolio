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
                                            <h3>System Features</h3>
                                            <hr class="notop">
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
                                            <li class="border-bottom">Side Setting </li>
                                            <li class="border-bottom">Message Management</li>
                                            <li class="border-bottom">Testimonial Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="install">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Installation</h3>
                                            <hr class="notop">
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
                                            <h3>Login Details:</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify">To log-in to admin panel - please use the following login credentials provided below.</p>
                                        <p class="text-justify">
                                            <strong class="text-danger">Please Note:</strong> Once you installed the system and you are on login page, if the login page not showing correctly OR not logging to system then you need to check again the .env file which is in side root of main folder, make sure your php have 7.1  version installed. if still problem exist you may contact us at <b>ismail32cse@gmail.com</b>, we will reply you as soon as possible.
                                            <br>
                                            <br>

                                        </p>
                                    </div>

                                    <div class="col-md-7">
                                        <strong>The login credentials provided below are for initial usage only - do not forget to update your password after first successful login.</strong>
                                        <p>After login to admin panel, you can create accounts for employees</p>
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
                                            <h3>Admin Dashboard</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <ul>
                                            <li>Education
                                            Scholarship
                                            Skills
                                            Experience
                                            Portfolio
                                            Setting
                                            Message
                                            Testimonial</li>
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
                                            <h3>Education</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new education in the system is very easy. you can add all related information of education. The facilities that education management holds in Dynamic Portfolio are listed below:
                                            <br>
                                            <br> To click <b>education</b> from sidebar</p>
                                        <ul>
                                            <li><strong>Add New education</strong></li>
                                            <p class="text-justify" >You can easily add new education in the system. The form is elaborate with all possible information you might need to add for a new education. During addition of new education you just have to provide the education name ( <span class="text-danger">Name is required</span>), education Contact Person Name, Email, Phone and Address.</p>
                                            <li><strong>education List</strong></li>
                                            <p class="text-justify">You can see list of all education at a glance. You Can Edit, Delete From here</p>
                                        </ul>
                                        <br>
                                    </div>

                                    <div class="col-md-7">
                                        <p><strong>Add education and education List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Addeducations.png')}}"> </li>
                                        <p id="educationsList"><strong>education List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/educations.png')}}">

                                    </div>
                                </div>
                            </div>

                            <div id="scholarship">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Scholarship</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new scholarship in the system is very easy. You can just click on add scholarship. and put the scholarship name. click submit.
                                            <br>
                                            <br> Click to scholarship From sidebar </p>
                                        <ul>
                                            <li><strong>Categories List</strong></li>
                                            <p class="text-justify"> You can see list of all Categories. You Can Edit, Delete From here</p>
                                        </ul>
                                        <br>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add scholarship and Categories List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCategory.png')}}">
                                        <p id="CategoriesList"><strong>Categories List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Categories.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="skill">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Skills</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new Skills in the system is very easy. You can just click on Skills. and put the Skills name. click submit.
                                            <br>
                                            <br> Click to Skills from Sidebar </p>
                                        <ul>

                                            <li><strong>Add New Skills</strong></li>
                                            <p class="text-justify"> You can easily add new Skills in the system. </p>

                                            <li><strong>Skills List</strong></li>
                                            <p class="text-justify"> You can see list of all Skills.  You Can Edit, Delete From here</p>
                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add Skills and Skills List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddWarehouse.png')}}">

                                        <p id="warehouseList"><strong>Skills List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Warehouse.png')}}">

                                    </div>
                                </div>

                            </div>

                            <div id="experience">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Experience</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new Experience in the system is very easy. you can add all related information of Experience. The facilities that Experience management holds in Dynamic Portfolio are listed below:
                                            <br>
                                            <br> Click to ProductsFrom sidebar </p>
                                        <ul>
                                            <li id="addProducts"><strong>Add New Experience</strong></li>
                                            <p class="text-justify"> You can easily add new Experience in the system. The form is elaborate with all possible information you might need to add for a new Experience. During addition of new Experience you just have to provide the Experience, Category, Warehouse, Mfg.Date, Exp.Date, Image, Detail, Quantity, Sell Price, education Price, Model, SKU, education. </p>

                                            <li><strong>Experience List</strong></li>
                                            <p class="text-justify"> You can see list of all Experience. You Can View, Edit, Delete From here</p>
                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add Experience and Experience List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddProduct.png')}}">

                                        <p id="ProductsList"><strong>Experience List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Products.png')}}">
                                        <p id="ViewProduct"><strong>View Experience</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/viewProducts.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="portfolio">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Portfolio</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new Portfolio in the system is very easy. You can add all related information of a Portfolio. The facilities that Portfolio management holds in Dynamic Portfolio are listed below:
                                            <br>
                                            <br> Click Portfolios from sidebar </p>
                                        <ul>
                                            <li><strong>Add New Portfolio</strong></li>
                                            <p class="text-justify"> You can easily add new Portfolio in the system. The form is elaborate with all possible information you might need to add for a new Portfolio. During addition of new Portfolio you just have to provide the Customer Name, Mobile #, Email, Address. </p>

                                            <li><strong>Customers List</strong></li>
                                            <p class="text-justify"> You can see list of all Portfolio. You Can Edit, Delete From here </p>
                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add Portfolio</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddCustomer.png')}}"> </li>
                                        <p><strong>Portfolio List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Customers.png')}}"> </li>
                                    </div>
                                </div>

                            </div>

                            <div id="setting">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Setting</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding company info in the system is very easy. You have to add all related information of company in form.
                                            <br>
                                            <br> To view company info go to " <b>Setting</b> " </p>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Company-info</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Company-info.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div id="message">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Message</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                        <p class="text-justify"> Adding a new Expense Invoices in the system is very easy. The facilities that invoice management holds in Dynamic Portfolio are listed below:
                                            <br>
                                            <br> Click Expenses Invoices From Sidebar </p>
                                            
                                        <ul>
                                            <li><strong>Add New Expense Invoice</strong></li>
                                            <p class="text-justify"> once you add expense type to the system then you can easily add new expense invoice in the system. add the Item info , Quantity, Rate, the system will automatially do calculation.</p>

                                            <li><strong>Expense Invoice List</strong></li>
                                            <p class="text-justify"> You can see list of all expense invoice at a glance. </p>

                                            <li><strong>Print/View Expense Invoice</strong></li>
                                            <p class="text-justify"> once you created invoice then go to invoice view, Edit, Delete invoice and print. </p>
                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add Expense Invoice</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddExpense.png')}}">
                                        <p><strong>Expense Invoices List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/expenseinvoicesList.png')}}">
                                        <p><strong>Print/View Expense Invoice</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/expenseinvoiceInvoices.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="testimonial">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Testimonial</h3>
                                            <hr class="notop">
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-right">
                                         <p class="text-justify"> Adding a new Loans in the system is very easy. You can 
                                            add all related information of a Loans. The facilities that Loans management holds in Dynamic Portfolio are listed below:
                                            <br>
                                            <br> Click Loans from sidebar </p>
                                        <ul>
                                            <li><strong>Add New Loans</strong></li>
                                            <p class="text-justify"> You can easily add new Loans in the system. The form is elaborate with all possible information you might need to add for a new Loans. During addition of new Loan you just have to provide the Loaner name, Loaner Mobile, Loaner Email, Taken date, End date Loaner Address. </p>

                                            <li><strong>Loans List</strong></li>
                                            <p class="text-justify"> You can see list of all Loans. You Can View, Edit, Delete From here </p>
                                        </ul>

                                        </ul>
                                    </div>
                                    <div class="col-7">
                                        <p><strong>Add Loan</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/AddLoan.png')}}">
                                        <p><strong>Loans List</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/LoansList.png')}}">
                                        <p><strong>View Loan Detail</strong></p>
                                        <img class="img-fluid" src="{{ asset('backend_assets/dist/img/documentation/Loansview.png')}}">
                                    </div>
                                </div>

                            </div>

                            <div id="customer_support">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-header">
                                            <h3>Customer Support</h3>
                                            <hr class="notop">
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
                                            <h3>Product Customization</h3>
                                            <hr class="notop">
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