<div class="tab-content table-responsive">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr>
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}
                </th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'January')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td>
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-February-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr>
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'February')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td>
                            <a href="" data-bs-toggle="modal" title="Update Unit Price"
                                data-bs-target="#editprofitmodal" data-myproduct="{{ $AccountProfitLoss->id }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-March-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'March')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-April-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'April')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-May-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'May')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-June-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'June')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-July-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'July')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-August-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'August')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-September-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'September')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="delete icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-October-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'October')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="delete icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-November-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'November')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="delete icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>
<div class="tab-pane fade" id="js-December-tab" role="tabpanel">
    <table class="table accountProfitLossDT table-bordered table-hover text-center">
        <thead>
            <tr class="text-small">
                <th width="5%">{{ __('ID') }}</th>
                <th width="21%">{{ __('Name') }}</th>
                <th width="8%">{{ __('Sales Price') }}</th>
                <th width="8%">{{ __('Cost Price') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Percentage') }}</th>
                <th width="8%">{{ __('Ammount') }}</th>
                <th width="8%">{{ __('Profit') }}</th>
                <th width="8%">{{ __('Loss') }}</th>
                <th width="10%"> Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($AccountProfitLosses as $key => $AccountProfitLoss)
                @if ($AccountProfitLoss->created_at->format('F') == 'December')
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ App\Models\Admin\Rfq::where('id', $AccountProfitLoss->rfq_id)->value('name') }}
                        </td>
                        <td>{{ $AccountProfitLoss->sales_price }}</td>
                        <td>{{ $AccountProfitLoss->cost_price }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_percentage }}</td>
                        <td>{{ $AccountProfitLoss->gross_makup_ammount }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_percentage }}</td>
                        <td>{{ $AccountProfitLoss->net_profit_ammount }}</td>
                        <td>{{ $AccountProfitLoss->profit }}</td>
                        <td>{{ $AccountProfitLoss->loss }}</td>
                        <td class="text-center">
                            <a href="{{ route('account-profit-loss.edit', [$AccountProfitLoss->id]) }}"
                                class="text-primary">
                                <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                            </a>
                            <a href="{{ route('account-profit-loss.destroy', [$AccountProfitLoss->id]) }}"
                                class="text-danger delete mx-2">
                                <i class="delete icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @empty
                <td>{{ __('Data not available') }}</td>
            @endforelse
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $('.accountProfitLossDT').DataTable({
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        "iDisplayLength": 10,
        "lengthMenu": [10, 25, 30, 50],
        columnDefs: [{
            orderable: false,
            targets: [10],
        }, ],
    });
</script>
