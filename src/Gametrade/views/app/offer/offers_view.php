<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo" style="margin-top:75px">Offers listing</h3>
                                <div class="span12 wrap-table">
                                    <div class="col-md-11">
                                        <table class="table-hover">
                                            <thead>
                                            <th>Offer id</th>
                                            <th>Game Name</th>
                                            <th>From user</th>
                                            <th>Action (Select a game you own that you want to trade this game with)</th>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->offers as $offer): ?>
                                                    <tr>
                                                        <td><?= $offer['offer_id']; ?></td>
                                                        <td><?= $offer['gamename']; ?></td>
                                                        <td><?= $offer['email']; ?></td>
                                                        <?php if (isset($_SESSION['is_logged']) AND $_SESSION['is_logged'] == 1) : ?>
                                                            <td>
                                                                <form action="<?= base_url('offer/expressinterest'); ?>" method="post" id="form_<?= $offer['offer_id'];?>" name="form_<?= $offer['offer_id'];?>">
                                                                    <input type="hidden" name="offer_id" value="<?= $offer['offer_id']; ?>" />
                                                                    <select name="game_id">
                                                                        <?php foreach ($this->games as $game): ?>
                                                                            <option value="<?= $game['game_id']; ?>"><?= $game['gamename']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <button class="btn btn-1" type="submit">Express interest</button>
                                                                </form>
                                                            </td>
                                                        <?php else: ?>
                                                            <td>Must login to make an offer</td>
                                                        <?php endif; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>