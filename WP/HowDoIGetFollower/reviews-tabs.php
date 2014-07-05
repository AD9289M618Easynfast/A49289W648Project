<div class="review-tabs-wrapper">
    <button id="showreviews">Customer Reviews</button>
    <button id="showdescription">Product Summary</button>
    <div class="overlay dialog"></div>

    <div class="customer-reviews-list-wrapper dialog">
        <div class="close-dialog"></div>
        <h3>HDIGF's Customer Reviews:</h3>
        <ul class="customer-reviews-list">
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>Bao Anh Le </strong>- 06/05/2014</span>
                <span class="rating5stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
            <li>
                <span class="name"><strong>ThuyVi Tran </strong>- 06/05/2014</span>
                <span class="rating4stars"></span>
                <p>VERY GOOD SERVICES!!!</p>
            </li>
        </ul>
        <button id="loadMore">Load More</button>
    </div>
    <div class="product-summary-wrapper dialog">
        <div class="close-dialog"></div>
        <h3>Product Summary</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <script>
        jQuery(document).ready(function() {
            size_li = jQuery(".customer-reviews-list li").size();
            jQuery('#showreviews').html('Reviews (' + size_li + ')');
            x = 10;
            jQuery('.customer-reviews-list li:lt(' + x + ')').show();
            jQuery('#loadMore').click(function() {
                x = (x + 10 <= size_li) ? x + 10 : size_li;
                jQuery('.customer-reviews-list li:lt(' + x + ')').show();
                jQuery('#showLess').show();
                if (x === size_li) {
                    jQuery('#loadMore').hide();
                }
            });
            jQuery('#showLess').click(function() {
                x = (x - 10 < 0) ? 10 : x - 10;
                jQuery('.customer-reviews-list li').not(':lt(' + x + ')').hide();
                jQuery('#loadMore').show();
                jQuery('#showLess').show();
                if (x === 10) {
                    jQuery('#showLess').hide();
                }
            });

            flagReviews = false;
            var showhideReviewsDialog = function() {
                if (!flagReviews) {
                    jQuery('.customer-reviews-list-wrapper').fadeIn('fast');
                    showhideOverlay();
                    console.log("show review");
                } else {
                    jQuery('.dialog').fadeOut('fast');
                    showhideOverlay(flagReviews);
                    console.log("hide review");
                }
                flagReviews = !flagReviews;
            };

            flagSummary = false;
            var showhideSummaryDialog = function() {
                if (!flagSummary) {
                    jQuery('.product-summary-wrapper').fadeIn('fast');
                    showhideOverlay();
                    console.log("show summary");
                } else {
                    jQuery('.dialog').fadeOut('fast');
                    showhideOverlay(flagSummary);
                    console.log("hide summary");
                }
                flagSummary = !flagSummary;
            };

            var showhideOverlay = function(flag) {
                if (!flag) {
                    console.log("show overlay");
                    jQuery('.overlay').fadeIn('fast');
                } else {
                    console.log("hide overlay");
                    jQuery('.overlay').fadeOut('fast');
                }
            };

            var onCloseDialog = function() {
                if (flagReviews) {
                    showhideReviewsDialog();
                } else if (flagSummary) {
                    showhideSummaryDialog();
                }
            };

            jQuery('#showreviews').click(showhideReviewsDialog);
            jQuery('#showdescription').click(showhideSummaryDialog);
            jQuery('.overlay').click(onCloseDialog);
            jQuery('.close-dialog').click(onCloseDialog);
        });
    </script>
</div>