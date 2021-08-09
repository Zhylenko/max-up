@section('google-analytics')
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZQE589S22G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZQE589S22G');
    </script>
@endsection