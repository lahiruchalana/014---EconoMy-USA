xquery version "1.0";
<query1>
    {
        let $doc := doc("xml/data_cab.xml")
        for $data in $doc/data_set/data
        let $value := data($data/value)
        return $value
    }
</query1>


