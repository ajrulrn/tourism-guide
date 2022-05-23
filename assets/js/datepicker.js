today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#datepicker').datepicker({
        modal: true,
        uiLibrary: 'bootstrap',
        minDate: function() {
            var date = new Date();
            date.setDate(date.getDate()+1);
            return new Date(date.getFullYear(), date.getMonth(), date.getDate());
        }
});