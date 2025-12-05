<a herf="https://www.w3schools.com">Link 1</a>
<a herf="https://zsgsucha.pl">ZS Goetel</a>


<script>
    let lista = document.querySelectorAll('a');
    console.log(lista);

    console.log('Pierwszy: ' + lista[0].getAttribute('href'));
    console.log('Drugi: ' + lista[1].getAttribute('href'));
</script>


