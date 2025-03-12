@extends('layout')

@section('content')
    <!-- Main -->
    <article id="main">
        <header>
            <h2>Contact</h2>
            <p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
        </header>
        <section class="wrapper style5">
            <div class="inner">

                <h3>Lorem ipsum dolor</h3>
                <p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt
                    lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis
                    lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac
                    sagittis semper. Curabitur purus leo, tempus sed finibus eget, fringilla quis risus. Maecenas et
                    lorem quis sem varius sagittis et a est. Maecenas iaculis iaculis sem. Donec vel dolor at arcu
                    tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet
                    justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt.
                    Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

                <p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus
                    in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus.
                    Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec dui cursus, posuere dui
                    eget interdum. Fusce lectus magna, sagittis at facilisis vitae, pellentesque at etiam. Quisque
                    posuere leo quis sem commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor
                    tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt.
                    Mauris felis nec felis elementum varius.</p>

                <section>
                    <h4>Form</h4>
                    <form method="post" action="#">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name">
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <select name="demo-category" id="demo-category">
                                    <option value="">- Category -</option>
                                    <option value="1">Manufacturing</option>
                                    <option value="1">Shipping</option>
                                    <option value="1">Administration</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-low" name="demo-priority" checked="">
                                <label for="demo-priority-low">Low</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-normal" name="demo-priority">
                                <label for="demo-priority-normal">Normal</label>
                            </div>
                            <div class="col-4 col-12-small">
                                <input type="radio" id="demo-priority-high" name="demo-priority">
                                <label for="demo-priority-high">High</label>
                            </div>
                            <div class="col-6 col-12-small">
                                <input type="checkbox" id="demo-copy" name="demo-copy">
                                <label for="demo-copy">Email me a copy</label>
                            </div>
                            <div class="col-6 col-12-small">
                                <input type="checkbox" id="demo-human" name="demo-human" checked="">
                                <label for="demo-human">Not a robot</label>
                            </div>
                            <div class="col-12">
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message"
                                          rows="6"></textarea>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary"></li>
                                    <li><input type="reset" value="Reset"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <hr/>

                <h4>Feugiat aliquam</h4>
                <p>Nam sapien ante, varius in pulvinar vitae, rhoncus id massa. Donec varius ex in mauris ornare, eget
                    euismod urna egestas. Etiam lacinia tempor ipsum, sodales porttitor justo. Aliquam dolor quam,
                    semper in tortor eu, volutpat efficitur quam. Fusce nec fermentum nisl. Aenean erat diam, tempus
                    aliquet erat.</p>

                <p>Etiam iaculis nulla ipsum, et pharetra libero rhoncus ut. Phasellus rutrum cursus velit, eget
                    condimentum nunc blandit vel. In at pulvinar lectus. Morbi diam ante, vulputate et imperdiet eget,
                    fermentum non dolor. Ut eleifend sagittis tincidunt. Sed viverra commodo mi, ac rhoncus justo. Duis
                    neque ligula, elementum ut enim vel, posuere finibus justo. Vivamus facilisis maximus nibh quis
                    pulvinar. Quisque hendrerit in ipsum id tellus facilisis fermentum. Proin mauris dui, at vestibulum
                    sit amet, auctor bibendum neque.</p>
            </div>
        </section>
    </article>

@endsection
