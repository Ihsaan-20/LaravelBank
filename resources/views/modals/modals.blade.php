<!--Transfer Modal -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Withdrawal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="transferForm">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="transfer" name="transfer" value="transfer">
                        </div>

                        <div class="mb-3">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter amount...">
                        </div>

                        <div class="mb-3">
                            <label for="">Transfer to</label>
                            <input type="text" class="form-control" id="transfer_to" name="transfer_to"
                                placeholder="Enter account number here...">
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Withdrawal Modal -->
<div class="modal fade" id="withdrawaleModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Withdrawal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="withdrawalForm">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="withdrawal" name="withdrawal" value="withdrawal">
                        </div>

                        <div class="mb-3">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter amount...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Deposit Modal -->
<div class="modal fade" id="depositeModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Deposit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="depositForm">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="deposit" name="deposit" value="deposit">
                        </div>

                        <div class="mb-3">
                            <label for="">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter amount...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
