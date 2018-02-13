<section id="home-page" class="container-fluid">
    <section style="background: rgb(236,236,236)" class="container">
        <article class="post">
            <div class="col-md-12 posts">
                <h3 style="font-family: 'Roboto Condensed', sans-serif;" class="topic-title page-header">
                    HTTP:// API

                </h3>
                <section class="posts">
                    <div id="form-content">
                        <form method="post" id="reg-form" autocomplete="off">
                            <div class="form-inline form-group">
                                <div class="form-inline">
                                    <select class="form-control">
                                        <option value="get">GET</option>
                                        <option value="post">POST</option>
                                    </select>
                                    <input style="width: 80%;" placeholder="http://" type="text"
                                           class="form-control" name="str_url"
                                           id="url" required/>
                                    <button style="border-radius: 0px; width: 10%" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Authorization</a></li>
                                <li><a data-toggle="tab" href="#menu1">Headers</a></li>
                                <li><a data-toggle="tab" href="#menu2">Body</a></li>
                                <li><a data-toggle="tab" href="#menu2">Pre-load</a></li>
                            </ul>
                            <div class="tab-content">
                                <p>
                                <div id="home" class="tab-pane fade in active">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            Basic panel example
                                        </div>
                                    </div>
                                </div>
                                </p>
                                <p>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <a id="add-button"  class="btn btn-default"><span style="cursor: pointer;" class="icon-plus"></span></a>
                                            <div id="headers-inputs"></div>
                                        </div>
                                    </div>
                                </div>
                                </p>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            Basic panel example
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script type="text/javascript" src="<?php echo base_url('assets/js/submit.js'); ?>"></script>
                </section>
            </div>
        </article>
    </section>
</section>
<section class="container-fluid" id="api-resutls">
    <section style="background: rgb(236,236,236)" class="container">
        <article class="post">
            <div class="col-md-12 posts">
                <h3 style="font-family: 'Roboto Condensed', sans-serif;" class="topic-title page-header">
                    Results
                </h3>
                <div class="panel panel-default">
                    <div id="request-results" class="panel-body">
                        Results
                    </div>
                </div>
                <div style="padding: 15px; margin: 5px;" id="cites">
                    <cite>Version 1.1</cite>
                    <cite class="pull-right">Progammatic team Mexicali</cite>
                </div>


            </div>

        </article>
    </section>

</section>