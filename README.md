
# GBIF dataset for Australian National Insect Collection

Dataset from GBIF 2014-10-30 that has not been parsed properly by GBIF.

For example, the record with id 8c811258-4c0a-457e-9a11-ea54ebef2b86 (http://www.gbif.org/occurrence/986548600) in the occurrence.cv file has the following content:

```
{
    "id": "8c811258-4c0a-457e-9a11-ea54ebef2b86",
    "catalogNumber": "32-031532-152",
    "collectionCode": "ANIC",
    "institutionCode": "CSIRO",
    "scientificName": "Odontomachus clarus Roger",
    "recordedBy": "Beatty,J.A.",
    "taxonRank": "Species",
    "kingdom": "Animalia",
    "phylum": "Arthropoda",
    "class": "",
    "order": "Hymenoptera",
    "family": "Formicidae",
    "genus": "Odontomachus",
    "specificEpithet": "clarus",
    "infraspecificEpithet": "",
    "decimalLatitude": "31.7166690826416",
    "decimalLongitude": "-110.866668701172",
    "coordinatePrecision": "",
    "coordinateUncertaintyInMeters": "10000",
    "maximumElevationInMeters": "",
    "minimumElevationInMeters": "",
    "minimumDepthInMeters": "",
    "maximumDepthInMeters": "",
    "continent": "",
    "country": "United States",
    "stateProvince": "Arizona",
    "county": "",
    "locality": "Madera Can. [Canyon], Pima Co. [County]",
    "year": "1963",
    "month": "08",
    "day": "00",
    "basisOfRecord": "PreservedSpecimen",
    "identifiedBy": "",
    "dateIdentified": "",
    "occurrenceRemarks": "",
    "locationRemarks": "",
    "recordNumber": "",
    "vernacularName": "",
    "identificationQualifier": "",
    "individualCount": "4",
    "eventID": "urn:biolink.anic.ento.csiro.au:Event:022C7C68-2B37-4F5C-AFC0-F89C4C7DD905",
    "geodeticDatum": "WGS84",
    "eventTime": "",
    "associatedSequences": "",
    "eventDate": "1963-08"
}
```

In GBIF the verbatim content is:

```
{
    "associatedSequences": null,
    "basisOfRecord": "00",
    "catalogNumber": "8c811258-4c0a-457e-9a11-ea54ebef2b86",
    "class": "Arthropoda",
    "collectionCode": "32-031532-152",
    "continent": null,
    "coordinatePrecision": "-110.866668701172",
    "coordinateUncertaintyInMeters": null,
    "country": null,
    "county": "Arizona",
    "dateIdentified": null,
    "day": "08",
    "decimalLatitude": null,
    "decimalLongitude": "31.7166690826416",
    "eventDate": null,
    "eventID": "4",
    "eventTime": "WGS84",
    "family": "Hymenoptera",
    "genus": "Formicidae",
    "geodeticDatum": "urn:biolink.anic.ento.csiro.au:Event:022C7C68-2B37-4F5C-AFC0-F89C4C7DD905",
    "id": "dr130|CSIRO|ANIC|32-031532-152",
    "identificationQualifier": null,
    "identifiedBy": "PreservedSpecimen",
    "individualCount": null,
    "infraspecificEpithet": "clarus",
    "institutionCode": "ANIC",
    "kingdom": "Species",
    "locality": null,
    "locationRemarks": null,
    "maximumDepthInMeters": null,
    "maximumElevationInMeters": "10000",
    "minimumDepthInMeters": null,
    "minimumElevationInMeters": null,
    "month": "1963",
    "occurrenceRemarks": null,
    "order": null,
    "phylum": "Animalia",
    "recordNumber": null,
    "recordedBy": "Odontomachus clarus Roger",
    "scientificName": "CSIRO",
    "specificEpithet": "Odontomachus",
    "stateProvince": "United States",
    "taxonRank": "Beatty,J.A.",
    "vernacularName": null,
    "year": "Madera Can. [Canyon], Pima Co. [County]"
}
```

Note that the scientific name is “CSIRO”, which GBIF then maps to the genus *Csiro*.

