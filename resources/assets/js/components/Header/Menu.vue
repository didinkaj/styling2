<script>
    export default{
        data(){
            return{

            }
        }
    }

</script>

<template>
<div>
    <div class=" ">
        <div class="title-bar " data-responsive-toggle="mainNavigation" data-hide-for="medium">
            <div class="title-bar-left">
                <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
                <div class="title-bar-title">Menu</div>
            </div>
            <div class="title-bar-right">
                <img src="/images/lg.png" alt="Cytonn Resident">
            </div>
        </div>
        <div class="top-bar" id="mainNavigation">
            <div class="top-bar-left">
                <ul class="menu vertical medium-horizontal">
                    <li class="menu-text hide-for-small-only">
                        <img src="/images/lg.png" alt="Cytonn Resident"/>
                    </li>
                    <li><a href="#">Our Residents</a></li>
                    <li><a href="#">Room & Suites</a></li>
                    <li><a href="#">Meeting & Conferences</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">|</a></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu vertical medium-horizontal">
                    <li><a href="#">Who we are</a></li>
                    <li><a href="#">Media Centre</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#"><img src="/images/usa.png" alt="Cytonn Resident"/></a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>


<style lang="scss" scoped>

</style>