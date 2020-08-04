require('./bootstrap');

$('.user-link').click(function(e) {
    axios.post('/visit/' + $(this).data('link-id'), {
        link: $(this).attr('href')
    })
        .then(response => console.log('response: ', response))
        .catch(error => console.error('error: ', error));
});
