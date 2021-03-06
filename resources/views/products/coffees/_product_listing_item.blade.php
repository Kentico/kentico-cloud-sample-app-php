@model DancingGoat.Models.Coffee

@{
    Layout = "~/Views/Shared/_ProductLayout.cshtml";
    int altitude = 0;
    bool altitudeParsed = Int32.TryParse(Model.Altitude, out altitude);
}

@section ProductSpecificProperties
{
    <div class="product-detail-properties">
        <h4>@Resources.DancingGoat.Product_Parameters</h4>
        <dl class="row">
            <dt class="col-xs-12 col-sm-4">@Resources.DancingGoat.Coffee_Farm</dt>
            <dd class="col-xs-12 col-sm-8">@Html.DisplayFor(vm => vm.Farm)</dd>
            <dt class="col-xs-12 col-sm-4">@Resources.DancingGoat.Coffee_Variety</dt>
            <dd class="col-xs-12 col-sm-8">@Html.DisplayFor(vm => vm.Variety)</dd>
            <dt class="col-xs-12 col-sm-4">@Resources.DancingGoat.Coffee_Processing</dt>
            <dd class="col-xs-12 col-sm-8">@if (Model.Processing.Any()) { @Html.Raw(string.Join(", ", Model.Processing.Select((x, i) => x.Name))) }</dd>
            <dt class="col-xs-12 col-sm-4">@Resources.DancingGoat.Coffee_Altitude</dt>
            @if (altitudeParsed)
            {
                <dd class="col-xs-12 col-sm-8">@altitude.ToString("N0") ft</dd>
            }
        </dl>
    </div>
}

@section ProductSpecificForm
{
    @Html.Partial("_FreeSampleFormPartial")
}

@section('scripts')

    <script type="text/javascript">
        $(function () {
            $("#getfreetaste").validate({
                rules: {
                    email: "email",
                    zipcode: "digits"
                }
            });
        });
    </script>
@endsection