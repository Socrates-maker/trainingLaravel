<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
main {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    font-family: 'Poppins';
}
.footer {
    margin-top: auto;
}
</style>
<body style="margin: 0px">
    <main>
        <div style="margin: 0px;">
            @include('navbar')
        </div>
        @yield('content')
        <div class="footer">
            @include('footer')
        </div>
    </main>
</body>

