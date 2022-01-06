if (jQuery().redactor) {
    initRedactor($('[data-role="redactor"]'));
}

function initRedactor(elements)
{
    let plugins = ['fullscreen', 'table', 'alignment'];
    let variables = [];
    elements.each(function (idx, element) {
        if ($(element).data('variables') !== undefined) {
            variables = $(element).data('variables').split(' ');
            plugins.push('variable');
        }
        $(element).redactor({
            buttons: ['undo', 'redo', 'format', 'bold', 'italic', 'underline', 'ul', 'ol', 'link'],
            plugins: plugins,
            variables: variables,
            toolbarFixedTopOffset: 50,
            minHeight: '300px',
        });
    });
}
