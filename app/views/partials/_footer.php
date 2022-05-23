<!-- Scripts -->
<!-- Libs JS -->
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/components/prism-core.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/components/prism-markup.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<!-- clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.0.7/js/star-rating.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.0.7/themes/krajee-svg/theme.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.0.7/js/locales/LANG.js"></script>
<!-- Theme JS -->
<script src="<?= base_url(); ?>assets/js/theme.min.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<?php if ($this->router->class == 'destination') :?>
<script src="<?= base_url() ?>assets/js/region.js"></script>
<script src="<?= base_url() ?>assets/js/datepicker.js"></script>
<?php endif; ?>

<script>
    function addTimeline(target) {
        let id                      = target.getAttribute('data-id');
        let wrapper                 = document.querySelector('.wrapper-timeline-'+id);
        let formRow                 = document.createElement('div');
        formRow.className           = 'form-group row';

        let firstCol                = document.createElement('div');
        firstCol.className          = 'col-4';

        let firstLabel              = document.createElement('label');
        firstLabel.textContent      = 'Jam';

        let firstInput              = document.createElement('input');
        firstInput.className        = 'form-control';
        firstInput.setAttribute('type', 'text');
        firstInput.setAttribute('name', `times${id}[]`)

        let secondCol               = document.createElement('div');
        secondCol.className         = 'col-6';

        let secondLabel             = document.createElement('label');
        secondLabel.textContent     = 'Desc';

        let secondInput             = document.createElement('input');
        secondInput.className       = 'form-control';
        secondInput.setAttribute('type', 'text');
        secondInput.setAttribute('name', `desc${id}[]`)

        let thirdCol                = document.createElement('div');
        thirdCol.className          = 'col-1 ps-0 text-end';

        let deleteButton            = document.createElement('button');
        deleteButton.className      = 'btn btn-danger mt-5 btn-delete-timeline';
        deleteButton.textContent    = '-';
        deleteButton.setAttribute('data-id', id);
        deleteButton.setAttribute('type', 'button')

        wrapper.appendChild(formRow);
        formRow.appendChild(firstCol);
        firstCol.appendChild(firstLabel)
        firstCol.appendChild(firstInput);
        formRow.appendChild(secondCol);
        secondCol.appendChild(secondLabel);
        secondCol.appendChild(secondInput);
        formRow.appendChild(thirdCol);
        thirdCol.appendChild(deleteButton);
    }

    let btnDeleteTimeline = document.querySelector('.btn-delete-timeline');
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-delete-timeline')) e.target.parentElement.parentElement.remove();
        if (e.target.classList.contains('btn-add-timeline')) addTimeline(e.target);
    });
</script>
</body>
</html>