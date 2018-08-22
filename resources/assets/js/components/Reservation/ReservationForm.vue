<script>
    export default{
        data(){
            return{

            }
        }
    }
</script>

<template>
    <div class="row slider-bottom-text ">
        <div class="column slide-foot">
            <div class="row align-middle foot-content show-for-medium-up hide-for-small-only">
                <div class="column medium-2 looking-for"><h5>I'm looking for</h5></div>
                <div class="column "><input class="input" type="text" placeholder="Select Location"></div>
                <div class="column ">
                    <div class="input-group">
                        <span class="input-group-label input date-icon"><i class="fa fa-calendar "></i></span>
                        <input class="input" type="text" placeholder="Check in Date">
                    </div>
                </div>
                <div class="column ">
                    <div class="input-group">
                        <span class="input-group-label input date-icon"><i class="fa fa-calendar"></i></span>
                        <input class="input" type="text" placeholder="Check out Date">
                    </div>
                </div>
                <div class="column reservation "><a>Make a Reservation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                        class="fa fa-arrow-right"></i></a></div>
            </div>

            <div class="row align-middle show-for-small-only foot-content ">
                <div class="column small-12 looking-for-small text-center"><h5>I'm looking for</h5></div>
                <div class="column small-12"><input class="input" type="text" placeholder="Select Location">
                </div>
                <div class="column small-12">
                    <div class="input-group">
                        <span class="input-group-label input date-icon"><i class="fa fa-calendar "></i></span>
                        <input class="input" type="text" placeholder="Check in Date">
                    </div>
                </div>
                <div class="column small-12">
                    <div class="input-group">
                        <span class="input-group-label input date-icon"><i class="fa fa-calendar"></i></span>
                        <input class="input" type="text" placeholder="Check out Date">
                    </div>
                </div>
                <div class="column small-12 reservation-small text-center"><a>Make a Reservation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

</style>