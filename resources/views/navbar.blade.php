<style>
.nav-container {
    background-color: black;
    margin: 0px;
    height: 60px;
}

.nav-container > ul {
    display: flex;
    gap: 20px;
    align-items: center;
    height: 100%;
    margin: 0px;
}

li {
    list-style: none;
}

.nav-container  a:active  {
    opacity: 1 !important;
}

.nav-container > ul > li > a {
    color: #fff;
    opacity: 0.5;
    text-decoration: none;
}



</style>
<div class="nav-container">
    <ul>
        <li>
            <a  href="/">Acceuil</a>
        </li>
        <li>
            <a href="/posts">Posts</a>
        </li>
        <li><a href="/posts/store">Nouveau post</a></li>
    </ul>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
