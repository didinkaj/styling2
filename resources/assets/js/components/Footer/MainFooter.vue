<script>
    export default {
        data() {
            return {
                residentsMenu: [
                    'About',
                    'Partners',
                    'Our Values',
                    'Timelines',
                    'Videos'
                ]

            }
        }

    }
</script>

<template>
    <section class="grid-container fluid section-ten">
        <footer class="grid-container  ">
            <div class="grid-x expanded callout secondary">
                <div class="cell medium-7">
                    <div class="grid-x">
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">Cytonn Residents</div>
                            <ul class="menu vertical menu-footer">
                                <li v-for="item in residentsMenu"><a href="#">{{item}}</a></li>
                            </ul>
                            <div class="footer-title">For Apartments</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Living Spaces</a></li>
                            </ul>
                        </div>
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">For Business</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Living Office</a></li>
                                <li><a href="#">Small Business Program</a></li>
                            </ul>
                            <div class="footer-title">For Education</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Education Solutions</a></li>
                            </ul>
                        </div>
                        <div class="small-4 large-4 cell">
                            <div class="footer-title">Get Help</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Care and Assembly</a></li>
                                <li><a href="#">FQA</a></li>
                            </ul>
                            <div class="footer-title">Contacts</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Media Relations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="medium-5">
                    <div class="grid-x">
                        <div class="small-4 medium-4 cell">
                            <div class="footer-title">Reservation</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Find an Apartment</a></li>
                                <li><a href="#">Residence Store</a></li>
                                <li><a href="#">Customer Journey</a></li>
                            </ul>
                            <div class="footer-title">Acccounts</div>
                            <ul class="menu vertical menu-footer">
                                <li><a href="#">Account Sign-In</a></li>
                                <li><a href="#">Store</a></li>
                            </ul>
                        </div>
                        <div class="small-4 medium-8 ">

                            <div class="footer-title">Sign up for our newsletter</div>
                            <div class="row">
                                <div class="column-12">
                                    <div class="input-group sign-up">
                                        <input placeholder="Enter Email Address" class="input-group-field"
                                               type="email">
                                        <div class="input-group-button">
                                            <input type="submit" class="button secondary" value="Sign up">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="footer-title">Follow Us</div>
                            <ul class="menu horizontal follow-us ">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-pinterest"></i></li>
                                <li><i class="fa fa-instagram"></i></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <br/>

            <div class="grid-x copy-right">
                <div class="medium-5 cell">
                    <ul class="menu ">
                        <li><a href="#"> <img src="/images/usa.png"> &nbsp; United States</a></li>
                    </ul>
                </div>

                <div class="medium-7 cell">
                    <ul class="menu copy-note">
                        <li class="menu-text">&copy 2018 Cytonn Residents</li>
                    </ul>
                </div>
            </div>

        </footer>
    </section>
</template>


<style lang="scss" scoped>


</style>