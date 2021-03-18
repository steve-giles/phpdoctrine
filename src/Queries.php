<?php

const ITEM_QUERY = "
select
    concat(concat('HCEU-ITEM-',i.id),'-VC') itemid,
    true custitem_parent,
    i.name displayname,
    34 subsidiary,
    null custitem_startdatetime,
    null custitem_enddatetime,
    1 taxschedule,
    null custitem_webinarclosedtime,
    'Virtual Classroom' DeliveryMethodName,
    'US' PrimaryStateName,
    'CE' PrimaryEducationTypeName,
    (select
         CASE lg.name
             WHEN 'ATC/LAT' THEN 'Athletic Training'
             WHEN 'CSCS/NSCA-CPT' THEN 'Athletic Training'
             WHEN 'Dietitian/Nutritionist' THEN 'Diet'
             WHEN 'CDM' THEN 'Diet'
             WHEN 'MT/LMT' THEN 'Massage'
             WHEN 'NP' THEN 'Nurse Practitioner'
             WHEN 'RN' THEN 'Nursing'
             WHEN 'LVN/LPN' THEN 'Nursing'
             WHEN 'RT' THEN 'Nursing'
             WHEN 'NHA' THEN 'Nursing'
             WHEN 'Rec / Activities Director' THEN 'Nursing'
             WHEN 'Non-Clinical' THEN 'Nursing'
             WHEN 'OT/COTA' THEN 'Occupational Therapy'
             WHEN 'PT/PTA' THEN 'Physical Therapy'
             WHEN 'SW' THEN 'Social Worker'
             WHEN 'SLP' THEN 'Speech and Language Pathology'
             WHEN 'Audiology' THEN 'Speech and Language Pathology'
             END mapped_name
     from license_group lg
              join item_license_group ilg
                   on ilg.license_group_id = lg.id
                       and ilg.deleted_at = '0000-01-01'
     where ilg.item_id = i.id
     limit 1
    ) PrimaryProfessionName,
    'VC5 Normal' PlatformTypeName,
    'Normal' CourseTypeName,
    'GEN-ACCT-DR' DeferredRevenueAccountExternalId,
    'VC/Physical Product' RevRecScheduleName,
    'Virtual Classroom' VertexProductClassName,
    null parentalExternalId,
    concat(concat('HCEU-ITEM-',i.id),'-VC') externalId,
    null custitem_webinarvendor,
    null custitem_webinaraddress
from item i
         join company_catalog cc
              on cc.item_id = i.id
                  and cc.company_id = 1
                  and cc.is_searchable = 1
                  and cc.deleted_at = '0000-01-01'
where i.deleted_at = '0000-01-01' and i.item_format_id !=5 and i.is_active = 1
union all
select
    concat(concat('HCEU-ITEM-',i.id),'-PP') itemid,
    false custitem_parent,
    i.name displayname,
    34 subsidiary,
    null custitem_startdatetime,
    null custitem_enddatetime,
    1 taxschedule,
    null custitem_webinarclosedtime,
    'Physical Product' DeliveryMethodName,
    'US' PrimaryStateName,
    'CE' PrimaryEducationTypeName,
    (select
         CASE lg.name
             WHEN 'ATC/LAT' THEN 'Athletic Training'
             WHEN 'CSCS/NSCA-CPT' THEN 'Athletic Training'
             WHEN 'Dietitian/Nutritionist' THEN 'Diet'
             WHEN 'CDM' THEN 'Diet'
             WHEN 'MT/LMT' THEN 'Massage'
             WHEN 'NP' THEN 'Nurse Practitioner'
             WHEN 'RN' THEN 'Nursing'
             WHEN 'LVN/LPN' THEN 'Nursing'
             WHEN 'RT' THEN 'Nursing'
             WHEN 'NHA' THEN 'Nursing'
             WHEN 'Rec / Activities Director' THEN 'Nursing'
             WHEN 'Non-Clinical' THEN 'Nursing'
             WHEN 'OT/COTA' THEN 'Occupational Therapy'
             WHEN 'PT/PTA' THEN 'Physical Therapy'
             WHEN 'SW' THEN 'Social Worker'
             WHEN 'SLP' THEN 'Speech and Language Pathology'
             WHEN 'Audiology' THEN 'Speech and Language Pathology'
             END mapped_name
     from license_group lg
              join item_license_group ilg
                   on ilg.license_group_id = lg.id
                       and ilg.deleted_at = '0000-01-01'
     where ilg.item_id = i.id
     limit 1
    ) PrimaryProfessionName,
    'Physical Product' PlatformTypeName,
    'Normal' CourseTypeName,
    'GEN-ACCT-DR' DeferredRevenueAccountExternalId,
    'VC/Physical Product' RevRecScheduleName,
    'Physical Product' VertexProductClassName,
    null parentalExternalId,
    concat(concat('HCEU-ITEM-',i.id),'-PP') externalId,
    null custitem_webinarvendor,
    null custitem_webinaraddress
from item i
         join company_catalog cc
              on cc.item_id = i.id
                  and cc.company_id = 1
                  and cc.is_searchable = 1
                  and cc.deleted_at = '0000-01-01'
where i.deleted_at = '0000-01-01' and i.item_format_id !=5 and i.is_active = 1
union all
select
    concat(concat('HCEU-ITEM-',i.id),'-W') itemid,
    false custitem_parent,
    i.name displayname,
    34 subsidiary,
    cb.broadcast_start_time custitem_startdatetime,
    DATE_ADD(cb.broadcast_start_time, INTERVAL i.hours HOUR) custitem_enddatetime,
    1 taxschedule,
    i.hours * 60 custitem_webinarclosedtime,
    'Webinar' DeliveryMethodName,
    'US' PrimaryStateName,
    'CE' PrimaryEducationTypeName,
    (select
         CASE lg.name
             WHEN 'ATC/LAT' THEN 'Athletic Training'
             WHEN 'CSCS/NSCA-CPT' THEN 'Athletic Training'
             WHEN 'Dietitian/Nutritionist' THEN 'Diet'
             WHEN 'CDM' THEN 'Diet'
             WHEN 'MT/LMT' THEN 'Massage'
             WHEN 'NP' THEN 'Nurse Practitioner'
             WHEN 'RN' THEN 'Nursing'
             WHEN 'LVN/LPN' THEN 'Nursing'
             WHEN 'RT' THEN 'Nursing'
             WHEN 'NHA' THEN 'Nursing'
             WHEN 'Rec / Activities Director' THEN 'Nursing'
             WHEN 'Non-Clinical' THEN 'Nursing'
             WHEN 'OT/COTA' THEN 'Occupational Therapy'
             WHEN 'PT/PTA' THEN 'Physical Therapy'
             WHEN 'SW' THEN 'Social Worker'
             WHEN 'SLP' THEN 'Speech and Language Pathology'
             WHEN 'Audiology' THEN 'Speech and Language Pathology'
             END mapped_name
     from license_group lg
              join item_license_group ilg
                   on ilg.license_group_id = lg.id
                       and ilg.deleted_at = '0000-01-01'
     where ilg.item_id = i.id
     limit 1
    ) PrimaryProfessionName,
    'Webinar' PlatformTypeName,
    'Normal' CourseTypeName,
    'HCEU-ACCT-DR' DeferredRevenueAccountExternalId,
    'Onsite/Webinar' RevRecScheduleName,
    'Webinar' VertexProductClassName,

    (
        select min(i2.id)
        from item i2
                 join course_broadcast cb2
                      on cb2.new_exam_id = i2.exam_id
        where i2.deleted_at = '0000-01-01'
          and i2.item_format_id != 5
          and cb2.course_id = i.id
    ) parentalExternalId,

    concat(concat('HCEU-ITEM-',i.id),'-W') externalId,
    3 custitem_webinarvendor, -- 3 is WebEx
    concat('https://lms.ceu360.com/play/', i.id,'?nextgen') custitem_webinaraddress
from item i
         join company_catalog cc
              on cc.item_id = i.id
                  and cc.company_id = 1
                  and cc.is_searchable = 1
                  and cc.deleted_at = '0000-01-01'
         join course_broadcast cb
              on cb.course_id = i.id
where i.deleted_at = '0000-01-01' and i.item_format_id =5 and i.is_active = 1;        
        ";