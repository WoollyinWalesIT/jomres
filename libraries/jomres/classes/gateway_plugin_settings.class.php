
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


/
/
 
A
l
l
o
w
s
 
J
o
m
r
e
s
 
t
o
 
d
e
t
e
r
m
i
n
e
 
g
a
t
e
w
a
y
 
s
e
t
t
i
n
g
s


c
l
a
s
s
 
g
a
t
e
w
a
y
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s

{

 
 
 
 
p
u
b
l
i
c
 
$
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
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
s
e
t
t
i
n
g
s
_
f
o
r
_
p
r
o
p
e
r
t
y
_
u
i
d
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
)

 
 
 
 
{


 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
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
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
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
o
v
e
r
r
i
d
i
n
g
_
g
a
t
e
w
a
y
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
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
5
0
9
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
'
0
0
5
0
9
'
]
)
)
 
{
 
/
/
 
N
o
 
g
a
t
e
w
a
y
s
 
i
n
s
t
a
l
l
e
d

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
l
s
e
 
{


 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
a
r
r
a
y
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
 
'
0
0
5
0
9
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
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
g
a
t
e
w
a
y
_
a
r
r
a
y
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
g
a
t
e
w
a
y
_
a
r
r
a
y
 
a
s
 
$
g
a
t
e
w
a
y
_
n
a
m
e
 
=
>
 
$
s
e
t
t
i
n
g
s
_
t
o
_
i
g
n
o
r
e
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
s
[
]
 
=
 
$
g
a
t
e
w
a
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
p
l
u
g
i
n
`
,
`
s
e
t
t
i
n
g
`
,
`
v
a
l
u
e
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
p
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
`
p
l
u
g
i
n
`
 
I
N
 
(
 
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
s
,
 
f
a
l
s
e
)
.
'
 
)
 
A
N
D
 
p
r
i
d
 
=
 
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
 
a
s
 
$
s
e
t
t
i
n
g
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
n
a
m
e
 
=
 
$
s
e
t
t
i
n
g
-
>
p
l
u
g
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
s
e
t
t
i
n
g
-
>
s
e
t
t
i
n
g
 
=
=
 
'
o
v
e
r
r
i
d
e
'
 
&
&
 
$
s
e
t
t
i
n
g
-
>
v
a
l
u
e
 
=
=
 
'
1
'
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
v
e
r
r
i
d
i
n
g
_
g
a
t
e
w
a
y
s
[
]
=
$
g
a
t
e
w
a
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
_
n
a
m
e
]
[
$
s
e
t
t
i
n
g
-
>
s
e
t
t
i
n
g
]
 
=
 
$
s
e
t
t
i
n
g
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
>
 
0
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
p
l
u
g
i
n
`
,
`
s
e
t
t
i
n
g
`
,
`
v
a
l
u
e
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
p
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
`
p
l
u
g
i
n
`
 
I
N
 
(
 
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
s
,
 
f
a
l
s
e
)
.
'
 
)
 
A
N
D
 
p
r
i
d
 
=
 
'
.
(
i
n
t
)
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
 
a
s
 
$
s
e
t
t
i
n
g
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
n
a
m
e
 
=
 
$
s
e
t
t
i
n
g
-
>
p
l
u
g
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
n
_
a
r
r
a
y
 
(
$
g
a
t
e
w
a
y
_
n
a
m
e
 
,
 
$
o
v
e
r
r
i
d
i
n
g
_
g
a
t
e
w
a
y
s
 
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
_
n
a
m
e
]
[
$
s
e
t
t
i
n
g
-
>
s
e
t
t
i
n
g
]
 
=
 
$
s
e
t
t
i
n
g
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
n
s
t
a
l
l
e
d
_
g
a
t
e
w
a
y
s
 
a
s
 
$
g
a
t
e
w
a
y
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
 
=
 
f
a
l
s
e
;


	
	
	
	
	
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
>
 
0
)
 
{
 
/
/
w
e
 
n
e
e
d
 
t
h
e
 
g
a
t
e
w
a
y
s
 
f
o
r
 
b
o
o
k
i
n
g
 
i
n
v
o
i
c
e
s

	
	
	
	
	
	
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
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
)
 
&
&
 

	
	
	
	
	
	
	
	
(
 

	
	
	
	
	
	
	
	
i
s
s
e
t
(
$
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
o
v
e
r
r
i
d
e
'
]
)
 
&
&
 

	
	
	
	
	
	
	
	
$
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
o
v
e
r
r
i
d
e
'
]
 
=
=
"
1
"

	
	
	
	
	
	
	
	
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
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
=
 
$
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
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
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
)
 
)
 
{

	
	
	
	
	
	
	
i
f
 
(
!
i
s
s
e
t
(
 
$
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
a
c
t
i
v
e
'
]
)
 
)
 
{

	
	
	
	
	
	
	
	
$
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
a
c
t
i
v
e
'
]
 
=
 
"
0
"
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
=
 
$
p
r
o
p
e
r
t
y
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
=
 
a
r
r
a
y
(
"
a
c
t
i
v
e
"
 
=
>
 
0
 
,
 
"
o
v
e
r
r
i
d
e
"
 
=
>
 
0
 
)
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
e
l
s
e
 
{
 
/
/
w
e
 
n
e
e
d
 
t
h
e
 
g
a
t
e
w
a
y
s
 
f
o
r
 
c
o
m
m
i
s
s
i
o
n
 
a
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e
s

	
	
	
	
	
	
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
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
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
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
=
 
$
g
l
o
b
a
l
_
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
 
{

	
	
	
	
	
	
	
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
 
=
 
a
r
r
a
y
(
"
a
c
t
i
v
e
"
 
=
>
 
0
 
,
 
"
o
v
e
r
r
i
d
e
"
 
=
>
 
0
 
)
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
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
g
a
t
e
w
a
y
_
a
r
r
a
y
[
$
g
a
t
e
w
a
y
]
[
'
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
'
]
)
 
&
&
 
$
g
a
t
e
w
a
y
_
a
r
r
a
y
[
$
g
a
t
e
w
a
y
]
[
'
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
'
]
 
=
=
 
"
1
"
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
'
]
 
=
 
$
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
a
t
e
w
a
y
]
[
'
c
o
n
f
i
g
_
l
i
n
k
s
'
]
 
=
 
a
r
r
a
y
(
"
b
u
t
t
o
n
"
 
=
>
 
$
g
a
t
e
w
a
y
_
a
r
r
a
y
[
$
g
a
t
e
w
a
y
]
[
'
b
u
t
t
o
n
'
]
 
,
 
"
l
i
n
k
"
 
=
>
 
$
g
a
t
e
w
a
y
_
a
r
r
a
y
[
$
g
a
t
e
w
a
y
]
[
'
l
i
n
k
'
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
g
a
t
e
w
a
y
_
a
r
r
a
y
 
a
s
 
$
g
w
_
n
a
m
e
 
=
>
 
$
g
w
 
)
 
{
 
/
/
 
S
o
m
e
 
g
a
t
e
w
a
y
s
 
(
 
c
u
r
r
e
n
t
l
y
,
 
o
n
l
y
 
S
t
r
i
p
e
 
b
u
t
 
p
o
t
e
n
t
i
a
l
 
i
s
 
f
o
r
 
o
t
h
e
r
s
 
t
o
o
 
)
 
w
i
l
l
 
n
o
t
 
h
a
v
e
 
a
n
 
"
a
c
t
i
v
e
"
 
s
e
t
t
i
n
g
 
a
s
 
t
h
e
y
'
r
e
 
p
e
r
 
m
a
n
a
g
e
r
,
 
n
o
t
 
p
e
r
 
p
r
o
p
e
r
t
y
.
 
I
f
 
t
h
e
 
0
0
5
0
9
 
s
c
r
i
p
t
 
r
e
s
p
o
n
d
s
 
w
i
t
h
 
a
 
c
o
n
n
e
c
t
e
d
 
s
e
t
t
i
n
g
 
t
h
e
n
 
w
e
'
l
l
 
s
e
t
 
t
h
e
 
g
a
t
e
w
a
y
 
a
s
 
a
c
t
i
v
e
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
g
w
[
'
c
o
n
n
e
c
t
e
d
'
]
)
 
&
&
 
$
g
w
[
'
c
o
n
n
e
c
t
e
d
'
]
 
=
=
 
t
r
u
e
 
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
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
[
$
g
w
_
n
a
m
e
]
[
'
a
c
t
i
v
e
'
]
 
=
 
t
r
u
e
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
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
;

 
 
 
 
}


}


