
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
g
e
n
e
r
i
c
_
b
l
a
c
k
_
b
o
o
k
i
n
g
_
i
n
s
e
r
t

{

 
 
 
 
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
i
n
i
t
(
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
i
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
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
;
	
	
	
	
	
	
	
	
	
/
/
t
h
i
s
 
w
i
l
l
 
b
e
 
p
o
p
u
l
a
t
e
d
 
a
f
t
e
r
 
t
h
e
 
n
e
w
 
b
l
a
c
k
 
b
o
o
k
i
n
g
 
i
n
s
e
r
t

	
	
$
t
h
i
s
-
>
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
;


	
	
$
t
h
i
s
-
>
a
r
r
i
v
a
l
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;
	
	
	
	
	
	
	
	
/
/
d
a
t
e
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
s
t
r
t
o
t
i
m
e
(
'
+
1
 
d
a
y
'
)
)
;
	
	
/
/
d
a
t
e
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
d
a
t
e
_
r
a
n
g
e
 
=
 
a
r
r
a
y
(
)
;
	
	
	
	
	
	
	
	
/
/
d
a
t
e
 
r
a
n
g
e
 
w
i
l
l
 
b
e
 
f
o
u
n
d
 
l
a
t
e
r
 
b
a
s
e
d
 
o
n
 
a
r
r
i
v
a
l
 
-
 
d
e
p
a
r
t
u
r
e

	
	
$
t
h
i
s
-
>
r
o
o
m
_
u
i
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
	
	
	
	
	
	
	
	
	
/
/
a
r
r
a
y
 
o
f
 
r
o
o
m
 
u
i
d
s
,
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
s
p
e
c
i
a
l
_
r
e
q
s
 
=
 
'
'
;
	
	
	
	
	
	
	
	
	
/
/
t
e
x
t
,
 
n
o
t
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
'
'
;
	
	
	
	
	
	
	
	
	
/
/
s
t
r
i
n
g
,
 
i
f
 
n
o
t
 
s
e
t
 
w
i
l
l
 
b
e
 
g
e
n
e
r
a
t
e
d
 
a
u
t
o
m
a
t
i
c
a
l
l
y

	
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
 
c
r
e
a
t
e
_
b
l
a
c
k
_
b
o
o
k
i
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
v
a
l
i
d
a
t
e
(
)
)
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}

	
	
	

	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)
)
 
{

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
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
i
n
s
e
r
t
_
b
l
a
c
k
_
b
o
o
k
i
n
g
(
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
v
a
l
i
d
a
t
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
A
r
r
i
v
a
l
 
d
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
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
r
o
o
m
_
u
i
d
s
)
 
|
|
 
e
m
p
t
y
(
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
R
o
o
m
 
u
i
d
s
 
a
r
r
a
y
 
n
o
t
 
s
e
t
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
t
h
i
s
-
>
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
E
r
r
o
r
 
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
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}


	
	
i
f
 
(
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
=
 
'
'
)
 
{

	
	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
u
m
b
e
r
 
=
 
s
e
t
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
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
 
t
r
u
e
;

 
 
 
 
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
a
v
a
i
l
a
b
i
l
i
t
y
'
)
;

	
	
$
a
v
a
i
l
a
b
i
l
i
t
y
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
a
v
a
i
l
a
b
i
l
i
t
y
(
$
t
h
i
s
-
>
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
,
 
$
t
h
i
s
-
>
a
r
r
i
v
a
l
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
,
 
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
)
;

	
	

	
	
i
f
 
(
!
$
a
v
a
i
l
a
b
i
l
i
t
y
-
>
c
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
s
e
r
t
_
b
l
a
c
k
_
b
o
o
k
i
n
g
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
d
a
t
e
_
r
a
n
g
e
 
=
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
)
;

	
	
a
r
r
a
y
_
p
o
p
(
$
t
h
i
s
-
>
d
a
t
e
_
r
a
n
g
e
)
;

	
	

	
	
$
t
h
i
s
-
>
i
n
s
e
r
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
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
i
n
s
e
r
t
_
r
o
o
m
_
b
o
o
k
i
n
g
s
(
)
;

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
b
l
a
c
k
b
o
o
k
i
n
g
_
c
r
e
a
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
b
l
a
c
k
 
b
o
o
k
i
n
g
s
 
a
r
e
 
c
r
e
a
t
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
b
l
a
c
k
_
b
o
o
k
i
n
g
s
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
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
 
$
t
h
i
s
-
>
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
s
e
r
t
_
c
o
n
t
r
a
c
t
_
d
e
t
a
i
l
s
(
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
I
N
S
E
R
T
 
I
N
T
O
 
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
o
n
t
r
a
c
t
s
 
(

	
	
	
	
	
	
	
`
a
r
r
i
v
a
l
`
,

	
	
	
	
	
	
	
`
d
e
p
a
r
t
u
r
e
`
,

	
	
	
	
	
	
	
`
s
p
e
c
i
a
l
_
r
e
q
s
`
,

	
	
	
	
	
	
	
`
d
a
t
e
_
r
a
n
g
e
_
s
t
r
i
n
g
`
,

	
	
	
	
	
	
	
`
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
`
,

	
	
	
	
	
	
	
`
t
a
g
`

	
	
	
	
	
	
	
)

	
	
	
	
	
V
A
L
U
E
S
 
(

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
a
r
r
i
v
a
l
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
.
"
'
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
s
p
e
c
i
a
l
_
r
e
q
s
.
"
'
,

	
	
	
	
	
	
	
'
"
.
i
m
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
d
a
t
e
_
r
a
n
g
e
)
.
"
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
t
h
i
s
-
>
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
.
"
,

	
	
	
	
	
	
	
'
"
.
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
n
u
m
b
e
r
.
"
'

	
	
	
	
	
	
	
)
"
;

	
	

	
	
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
d
o
I
n
s
e
r
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
,
'
'
)
;

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
N
e
w
 
c
o
n
t
r
a
c
t
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
s
e
r
t
_
r
o
o
m
_
b
o
o
k
i
n
g
s
(
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
I
N
S
E
R
T
 
I
N
T
O
 
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
r
o
o
m
_
b
o
o
k
i
n
g
s
 
(

	
	
	
	
	
	
	
`
r
o
o
m
_
u
i
d
`
,

	
	
	
	
	
	
	
`
d
a
t
e
`
,

	
	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
,

	
	
	
	
	
	
	
`
b
l
a
c
k
_
b
o
o
k
i
n
g
`
,

	
	
	
	
	
	
	
`
i
n
t
e
r
n
e
t
_
b
o
o
k
i
n
g
`
,

	
	
	
	
	
	
	
`
r
e
c
e
p
t
i
o
n
_
b
o
o
k
i
n
g
`
,

	
	
	
	
	
	
	
`
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
`

	
	
	
	
	
	
	
)

	
	
	
	
	
V
A
L
U
E
S
 
"
;

	
	

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
 
a
s
 
$
r
o
o
m
_
u
i
d
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
t
h
i
s
-
>
d
a
t
e
_
r
a
n
g
e
 
a
s
 
$
d
a
t
e
)
 
{

	
	
	
	
$
q
u
e
r
y
 
.
=
 
"
(

	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
r
o
o
m
_
u
i
d
.
"
,

	
	
	
	
	
	
	
'
"
.
$
d
a
t
e
.
"
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
.
"
,

	
	
	
	
	
	
	
1
,

	
	
	
	
	
	
	
0
,

	
	
	
	
	
	
	
0
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
$
t
h
i
s
-
>
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
.
"

	
	
	
	
	
	
	
)
,
"
;

	
	
	
}

	
	
}

	
	

	
	
$
q
u
e
r
y
 
=
 
r
t
r
i
m
(
$
q
u
e
r
y
,
 
'
,
'
)
;

	
	

	
	
i
f
 
(
!
d
o
I
n
s
e
r
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
,
'
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
o
o
m
 
b
o
o
k
i
n
g
s
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

}

