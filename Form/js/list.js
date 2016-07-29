<script type="text/javascript">
    var cares = ["Radiology",
                "Urology",
                "Veterinary",
                "Opthalmology",
                "Eye",
                "Gastroenterologist",
                "Cardiology",
                "Dental",
                "Anesthesiology",
                "Hematology",
                "Psychiatric",
                "Diabetes",
                "Cosmetic & Plastic Surgery",
                "Immunology",
                "Ayurveda",
                "Nephrology",
                "ENT",
                "Homeopathy",
                "Oncology",
                "Mental",
                "Cancer",
                "Orthopaedic",
                "Gynecology",
                "Rheumatology",
                "Neurology",
                "Maternity",
                "Dermatology",
                "Children"];

    jQuery(function ($) {
        $("#autocomplete1").shieldAutoComplete({
            dataSource: {
                data: cares
            },
            minLength: 1
        });
         $("#autocomplete2").shieldAutoComplete({
            dataSource: {
                data: cares
            },
            minLength: 1
        });
        
    });
</script>