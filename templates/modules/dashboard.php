<?php

function authentication_required() {
    return true;
}

function get_title() {
    return 'محیط کاربری';
}

function get_content() { ?>

    <p>
        این محتوایی است که فقط به کاربران وارد شده، نمایش داده خواهد شد.
    </p>
        
<?php }

