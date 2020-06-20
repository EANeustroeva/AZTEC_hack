<span class="btn btn-default">По промежуточной аттестации</span>
<span class="btn btn-default">По освоению компетенций</span>
<div id="wrapper-2">
    <!--<div id="root-left">
        <div class="branch-inverse l1">
            <div class="entry-inverse"><span class="label-inverse">Parent 1</span>
                <div class="branch-inverse l2">
                    <div class="entry-inverse"><span class="label-inverse">Grand Parent 1</span>
                        <div class="branch-inverse l3">
                            <div class="entry-inverse sole"><span class="label-inverse">Grand Grand Parent 1</span></div>
                        </div>
                    </div>
                    <div class="entry-inverse"><span class="label-inverse">Grand Parent 2</span></div>
                </div>
            </div>
            <div class="entry-inverse"><span class="label-inverse">Parent 2</span>
                <div class="branch-inverse l2">
                    <div class="entry-inverse sole"><span class="label-inverse">Grand Parent 1</span></div>
                </div>
            </div>
        </div>
    </div>-->
    <div id="main-root"><span class="label">Root</span></div>
    <div id="root-right">
        <!-- <span class="label">Root</span> -->
        <div class="branch l1">
            <div class="entry"><span class="label">Child 1</span>
                <div class="branch l2">
                    <div class="entry"><span class="label">Grand Child 1</span></div>
                    <div class="entry"><span class="label">Grand Child 2</span></div>
                </div>
            </div>
            <div class="entry"><span class="label">Child 2</span>
                <div class="branch l2">
                    <div class="entry"><span class="label">Grand Child 1</span></div>
                    <div class="entry"><span class="label">Grand Child 2</span>
                        <div class="branch l3">
                            <div class="entry sole"><span class="label">Grand G Child 1</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>

    #family-graph {
        width: 100%;
        height: 100%;
    }

    #wrapper-2 {
        margin-top: 50px;
        position: relative;
    }

    #root-left {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        right: -150px;
    }

    #root-right {
        position: relative;
        display: table-cell;
        vertical-align: middle;
    }

    #main-root {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        min-width: 0px;
    }

    /*right tree*/
    .branch {
        position: relative;
        margin-left: 250px;
    }


    .branch:before {
        content: "";
        width: 50px;
        border-top: 2px solid magenta;
        position: absolute;
        left: -100px;
        top: 50%;
        margin-top: 1px;
    }

    .entry {
        position: relative;
        min-height: 60px;
        min-width: 150px;
    }

    .entry:before {
        content: "";
        height: 100%;
        position: absolute;
        border-left: 2px solid black;
        left: -50px;
    }

    .entry:after {
        content: "";
        width: 50px;
        border-top: 2px solid aqua;
        position: absolute;
        left: -50px;
        top: 50%;
        margin-top: 1px;
    }

    .entry:first-child:before {
        width: 10px;
        height: 50%;
        top: 50%;
        margin-top: 2px;
        border-radius: 10px 0 0 0;
    }


    .entry:first-child:after {
        height: 10px;
        border-radius: 10px 0 0 0;
    }

    .entry:last-child:before {
        width: 10px;
        height: 50%;
        border-radius: 0 0 0 10px;
    }

    .entry:last-child:after {
        height: 10px;
        border-top: none;
        border-bottom: 2px solid aqua;
        border-radius: 0 0 0 10px;
        margin-top: -10px;
    }

    .entry.sole:after {
        width: 50px;
        height: 0px;
        margin-top: 1px;
        border-radius: 0px
    }

    .entry.sole:before {
        display: none;
    }


    .label {
        display: block;
        min-width: 150px;
        padding: 5px 10px;
        line-height: 20px;
        text-align: center;
        border: 2px solid silver;
        border-radius: 5px;
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -15px;
        overflow-wrap: break-word;
        background-color: lightblue;
    }

    /* left tree  */
    .branch-inverse {
        position: relative;
        margin-right: 250px;
    }

    .branch-inverse:before {
        content: "";
        width: 50px;
        border-top: 2px solid magenta;
        position: absolute;
        right: -100px;
        top: 50%;
        margin-top: 1px;
    }

    .entry-inverse {
        position: relative;
        min-height: 60px;
        min-width: 150px;
    }

    .entry-inverse:after {
        content: "";
        width: 50px;
        border-top: 2px solid aqua;
        position: absolute;
        right: -50px;
        top: 50%;
        margin-top: 1px;
    }

    .entry-inverse:before {
        content: "";
        height: 100%;
        border-right: 2px solid black;
        position: absolute;
        right: -50px;
    }

    .entry-inverse:first-child:before {
        width: 10px;
        height: 50%;
        top: 50%;
        margin-top: 2px;
        border-radius: 0 10px 0 0;
    }


    .entry-inverse:first-child:after {
        height: 10px;
        border-radius: 0 10px 0 0;
    }

    .entry-inverse:last-child:before {
        width: 10px;
        height: 50%;
        border-radius: 0 0 10px 0;
    }

    .entry-inverse:last-child:after {
        height: 10px;
        border-top: none;
        border-bottom: 2px solid aqua;
        border-radius: 0 0 10px 0;
        margin-top: -10px;
    }

    .entry-inverse.sole:after {
        width: 50px;
        height: 0px;
        margin-top: 1px;
        border-radius: 0px;
    }

    .entry-inverse.sole:before {
        display: none;
    }



    .label-inverse {
        display: block;
        min-width: 150px;
        padding: 5px 10px;
        line-height: 20px;
        text-align: center;
        border: 2px solid silver;
        border-radius: 5px;
        position: absolute;
        right: 0;
        top: 50%;
        margin-top: -15px;
        overflow-wrap: break-word;
        background-color: lightblue;
    }
</style>