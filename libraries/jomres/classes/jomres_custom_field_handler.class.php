
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
a
l
l
_
c
u
s
t
o
m
_
f
i
e
l
d
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
u
i
d
`
,
 
`
f
i
e
l
d
n
a
m
e
`
,
 
`
d
e
f
a
u
l
t
_
v
a
l
u
e
`
,
 
`
d
e
s
c
r
i
p
t
i
o
n
`
,
 
`
r
e
q
u
i
r
e
d
`
,
 
`
p
t
y
p
e
_
x
r
e
f
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
u
s
t
o
m
_
f
i
e
l
d
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
f
i
e
l
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
f
i
e
l
d
s
 
a
s
 
$
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
[
 
$
t
-
>
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
u
i
d
'
 
=
>
 
$
t
-
>
u
i
d
,
 
'
f
i
e
l
d
n
a
m
e
'
 
=
>
 
$
t
-
>
f
i
e
l
d
n
a
m
e
,
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
=
>
 
$
t
-
>
d
e
f
a
u
l
t
_
v
a
l
u
e
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
t
-
>
d
e
s
c
r
i
p
t
i
o
n
,
 
'
r
e
q
u
i
r
e
d
'
 
=
>
 
$
t
-
>
r
e
q
u
i
r
e
d
,
 
'
p
t
y
p
e
_
x
r
e
f
'
 
=
>
 
$
t
-
>
p
t
y
p
e
_
x
r
e
f
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
-
>
p
t
y
p
e
_
x
r
e
f
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
_
x
r
e
f
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
t
-
>
p
t
y
p
e
_
x
r
e
f
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
p
t
y
p
e
_
x
r
e
f
)
 
&
&
 
!
e
m
p
t
y
(
$
p
t
y
p
e
_
x
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
t
y
p
e
_
x
r
e
f
 
a
s
 
$
x
r
e
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
$
x
r
e
f
 
]
[
 
$
t
-
>
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
u
i
d
'
 
=
>
 
$
t
-
>
u
i
d
,
 
'
f
i
e
l
d
n
a
m
e
'
 
=
>
 
$
t
-
>
f
i
e
l
d
n
a
m
e
,
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
=
>
 
$
t
-
>
d
e
f
a
u
l
t
_
v
a
l
u
e
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
t
-
>
d
e
s
c
r
i
p
t
i
o
n
,
 
'
r
e
q
u
i
r
e
d
'
 
=
>
 
$
t
-
>
r
e
q
u
i
r
e
d
,
 
'
p
t
y
p
e
_
x
r
e
f
'
 
=
>
 
$
t
-
>
p
t
y
p
e
_
x
r
e
f
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
B
C
:
 
n
o
 
p
t
y
p
e
 
x
r
e
f
,
 
s
o
 
w
e
`
l
l
 
a
s
s
u
m
e
 
t
h
e
 
f
i
l
e
d
 
i
s
 
a
s
s
i
g
n
e
d
 
t
o
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
0
 
]
[
 
$
t
-
>
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
u
i
d
'
 
=
>
 
$
t
-
>
u
i
d
,
 
'
f
i
e
l
d
n
a
m
e
'
 
=
>
 
$
t
-
>
f
i
e
l
d
n
a
m
e
,
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
=
>
 
$
t
-
>
d
e
f
a
u
l
t
_
v
a
l
u
e
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
$
t
-
>
d
e
s
c
r
i
p
t
i
o
n
,
 
'
r
e
q
u
i
r
e
d
'
 
=
>
 
$
t
-
>
r
e
q
u
i
r
e
d
,
 
'
p
t
y
p
e
_
x
r
e
f
'
 
=
>
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
C
u
s
t
o
m
F
i
e
l
d
s
B
y
P
t
y
p
e
I
d
(
$
p
t
y
p
e
_
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
)
 
|
|
 
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
a
l
l
_
c
u
s
t
o
m
_
f
i
e
l
d
s
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
$
p
t
y
p
e
_
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
$
p
t
y
p
e
_
i
d
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
0
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
u
s
t
o
m
_
f
i
e
l
d
s
_
b
y
_
p
t
y
p
e
_
i
d
[
 
0
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
)
;

 
 
 
 
}

}

