<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/4/2017
 * Time: 1:43 AM
 */
?>
<div class="ui cards centered">
<div class="ui card">
    <h3 class = "newsTitle"><?=$new['title']?></h3> <span class="created"><?=$new['createDate']?></span>
    <?=$new['content']?>
    <?php
    $new['author'] = new User($new['authorId']);
    $new['authorName'] = $new['author']->firstName . ' ' . $new['author']->lastName;
    ?>
    <span>Created by: <?=$new['authorName']?></span>
</div>
    <div class="ui card">
    <div class="ui comments">
        <h3 class="ui dividing header">Comments</h3>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/matt.jpg">
            </a>
            <div class="content">
                <a class="author">Matt</a>
                <div class="metadata">
                    <span class="date">Today at 5:42PM</span>
                </div>
                <div class="text">
                    How artistic!
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
        </div>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/elliot.jpg">
            </a>
            <div class="content">
                <a class="author">Elliot Fu</a>
                <div class="metadata">
                    <span class="date">Yesterday at 12:30AM</span>
                </div>
                <div class="text">
                    <p>This has been very useful for my research. Thanks as well!</p>
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
            <div class="comments">
                <div class="comment">
                    <a class="avatar">
                        <img src="/images/avatar/small/jenny.jpg">
                    </a>
                    <div class="content">
                        <a class="author">Jenny Hess</a>
                        <div class="metadata">
                            <span class="date">Just now</span>
                        </div>
                        <div class="text">
                            Elliot you are always so right :)
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <a class="avatar">
                <img src="/images/avatar/small/joe.jpg">
            </a>
            <div class="content">
                <a class="author">Joe Henderson</a>
                <div class="metadata">
                    <span class="date">5 days ago</span>
                </div>
                <div class="text">
                    Dude, this is awesome. Thanks so much
                </div>
                <div class="actions">
                    <a class="reply">Reply</a>
                </div>
            </div>
        </div>
        <form class="ui reply form">
            <div class="field">
                <textarea></textarea>
            </div>
            <div class="ui blue labeled submit icon button">
                <i class="icon edit"></i> Add Reply
            </div>
        </form>
    </div>
    </div>
</div>
