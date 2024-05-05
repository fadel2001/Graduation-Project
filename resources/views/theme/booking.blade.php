@extends('theme.master')
@section('title', 'Booking')
@section('text', 'Booking')
@section('booking-active', 'active')
@section('page', 'Booking')

@section('content')
    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat
                            ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1" onchange="showOptions()">
                                            <option value="1">Adventure</option>
                                            <option value="2">Beach</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Historical</option>
                                            <option value="5">Religious</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>

                                    <div id="optionsList1" style="display: none;">
                                        <p>Select items for Adventure:</p>
                                        <div>
                                            <input type="checkbox" id="wadimujib" name="wadimujib">
                                            <label for="wadimujib">Wadi Mujib</label><br>
                                            <input type="checkbox" id="ajlounforest" name="ajlounforest">
                                            <label for="ajlounforest">Ajloun Forest</label><br>
                                            <input type="checkbox" id="dibeenforest" name="dibeenforest">
                                            <label for="dibeenforest">Dibeen Forest</label><br>
                                            <input type="checkbox" id="danabiospher" name="danabiospher">
                                            <label for="danabiospher">dana biospher</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList2" style="display: none;">
                                        <p>Select items for Beach:</p>
                                        <div>
                                            <input type="checkbox" id="Aqaba" name="Aqaba">
                                            <label for="Aqaba">Aqaba</label><br>
                                            <input type="checkbox" id="DeadSea" name="DeadSea">
                                            <label for="DeadSea">Dead Sea</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList3" style="display: none;">
                                        <p>Select items for Cultural:</p>
                                        <div>
                                            <input type="checkbox" id="ovalplazainjerash" name="ovalplazainjerash">
                                            <label for="ovalplazainjerash">Oval Plaza in Jerash</label><br>
                                            <input type="checkbox" id="ammancitadel" name="ammancitadel">
                                            <label for="ammancitadel">Amman Citadel</label><br>
                                            <input type="checkbox" id="shobakcastle" name="shobakcastle">
                                            <label for="shobakcastle">Shobak Castle</label><br>
                                            <input type="checkbox" id="ajloncastle" name="ajloncastle">
                                            <label for="ajloncastle">Ajlon Castle</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList4" style="display: none;">
                                        <p>Select items for Historical:</p>
                                        <div>
                                            <input type="checkbox" id="petra" name="petra">
                                            <label for="petra">Petra</label><br>
                                            <input type="checkbox" id="UmmQais" name="UmmQais">
                                            <label for="UmmQais">Umm Qais</label><br>
                                            <input type="checkbox" id="KarakCastel" name="KarakCastel">
                                            <label for="KarakCastel">Karak Castel</label><br>
                                            <input type="checkbox" id="QasrAmra" name="QasrAmra">
                                            <label for="QasrAmra">Qasr Amra</label><br>
                                        </div>
                                    </div>

                                    <div id="optionsList5" style="display: none;">
                                        <p>Select items for Religious:</p>
                                        <div>
                                            <input type="checkbox" id="BaptismSite" name="BaptismSite">
                                            <label for="BaptismSite">Baptism Site</label><br>
                                            <input type="checkbox" id="MountNebo" name="MountNebo">
                                            <label for="MountNebo">Mount Nebo</label><br>
                                            <input type="checkbox" id="Al-Maghtas" name="Al-Maghtas">
                                            <label for="Al-Maghtas">Al-Maghtas</label><br>
                                            <input type="checkbox" id="NabiMusa" name="NabiMusa">
                                            <label for="NabiMusa">Nabi Musa site</label><br>
                                        </div>
                                    </div>

                                    <!-- Add similar divs for other destination options -->
                                    <script>
                                        function showOptions() {
                                            var select = document.getElementById("select1");
                                            var selectedOption = select.options[select.selectedIndex].value;

                                            // Hide all option lists
                                            var optionLists = document.querySelectorAll("[id^=optionsList]");
                                            optionLists.forEach(function(list) {
                                                list.style.display = "none";
                                            });

                                            // Show the selected option's list
                                            document.getElementById("optionsList" + selectedOption).style.display = "block";
                                        }

                                        function calculateCost() {
                                            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                            var selectedOptions = 0;
                                            checkboxes.forEach(function(checkbox) {
                                                if (checkbox.checked) {
                                                    selectedOptions++;
                                                }
                                            });
                                            var cost = selectedOptions * 20;
                                            document.getElementById("costMessage").innerText = "Cost: $" + cost;
                                        }
                                    </script>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="personCount">
                                            <option value="1">1 Person</option>
                                            <option value="2">2 Persons</option>
                                            <option value="3">more than</option>
                                        </select>
                                        <label for="personCount">Number of Persons</label>
                                    </div>
                                </div>

                                <div class="col-12" id="costMessage">Cost: $0</div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>
                        <button class="btn btn-primary" onclick="calculateCost()">Calculate Cost</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->
@endsection

@section('Path-area')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">@yield('page')</li>
        </ol>
    </nav>
@endsection
