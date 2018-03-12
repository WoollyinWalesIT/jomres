
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
o
o
k
i
n
g
_
c
a
n
c
e
l

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
a
n
c
e
l
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
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
t
r
y
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
 
$
t
h
i
s
-
>
a
p
p
l
y
_
c
a
n
c
e
l
l
a
t
i
o
n
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
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
,
 
b
o
o
k
e
d
_
i
n
,
 
b
o
o
k
e
d
o
u
t
,
 
c
a
n
c
e
l
l
e
d
 
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
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
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
 
'
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
'
 
"
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
D
e
t
a
i
l
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
o
n
t
r
a
c
t
D
e
t
a
i
l
s
 
a
s
 
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
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
 
'
.
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
'
 
d
o
e
s
n
`
t
 
e
x
i
s
t
s
 
i
n
 
t
h
e
 
d
a
t
a
b
a
s
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
-
>
b
o
o
k
e
d
_
i
n
 
=
=
 
1
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
,
 
g
u
e
s
t
 
i
s
 
c
h
e
c
k
e
d
 
i
n
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
-
>
b
o
o
k
e
d
o
u
t
 
=
=
 
1
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
,
 
g
u
e
s
t
 
a
l
r
e
a
d
y
 
c
h
e
c
k
e
d
 
o
u
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
-
>
c
a
n
c
e
l
l
e
d
 
=
=
 
1
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
,
 
b
o
o
k
i
n
g
 
i
s
 
a
l
r
e
a
d
y
 
c
a
n
c
e
l
l
e
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
 
 
 
 
 
 
 
/
/
 
1
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
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
 
(
i
n
t
)
 
*
*
*
*
*
 
R
e
q
u
i
r
e
d
 
*
*
*
*
*

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
a
s
o
n
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
s
t
r
i
n
g
)

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
o
t
e
 
=
 
'
'
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
s
t
r
i
n
g
)

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
p
r
o
v
e
d
 
=
 
1
;
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
(
i
n
t
)


 
 
 
 
 
 
 
 
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
 
a
p
p
l
y
_
c
a
n
c
e
l
l
a
t
i
o
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
f
r
o
m
 
r
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
 
t
a
b
l
e

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
D
E
L
E
T
E
 
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
 

	
	
	
	
	
W
H
E
R
E
 
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
 
'
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
'

	
	
	
	
	
A
N
D
 
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
 
'
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
'

	
	
	
	
	
"
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
U
n
a
b
l
e
 
t
o
 
d
e
l
e
t
e
 
f
r
o
m
 
r
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
 
t
a
b
l
e
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s
 
(
s
e
t
 
a
s
 
c
a
n
c
e
l
l
e
d
)

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
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
 

	
	
	
	
	
S
E
T
 
`
c
a
n
c
e
l
l
e
d
`
=
'
1
'
,
 

	
	
	
	
	
	
`
c
a
n
c
e
l
l
e
d
_
t
i
m
e
s
t
a
m
p
`
 
=
 
'
"
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'
,
 

	
	
	
	
	
	
`
c
a
n
c
e
l
l
e
d
_
r
e
a
s
o
n
`
 
=
 
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
r
e
a
s
o
n
.
"
'
,

	
	
	
	
	
	
`
a
p
p
r
o
v
e
d
`
 
=
 
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
p
p
r
o
v
e
d
.
"
'
 

	
	
	
	
	
W
H
E
R
E
 
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
 
'
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
'

	
	
	
	
	
A
N
D
 
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
 
'
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
'
 

	
	
	
	
	
"
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
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
c
a
n
c
e
l
l
a
t
i
o
n
s
 
d
a
t
a
 
f
o
r
 
c
o
n
t
r
a
c
t
'
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
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
n
o
t
e
 
(
i
f
 
s
e
t
)

 
 
 
 
 
 
 
 
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
n
o
t
e
 
!
=
 
'
'
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
c
o
m
p
_
n
o
t
e
s
 

	
	
	
	
	
	
	
	
	
(
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
n
o
t
e
`
,

	
	
	
	
	
	
	
	
	
`
t
i
m
e
s
t
a
m
p
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
 
(
'
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
n
o
t
e
.
"
'
,

	
	
	
	
	
	
	
	
	
'
"
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
"
'
,

	
	
	
	
	
	
	
	
	
'
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
'

	
	
	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
"
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
U
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
b
o
o
k
i
n
g
 
n
o
t
e
 
f
o
r
 
c
o
n
t
r
a
c
t
'
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
'
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
i
n
v
o
i
c
e
 
d
e
t
a
i
l
s
 
(
s
e
t
 
a
s
 
c
a
n
c
e
l
l
e
d
)

 
 
 
 
 
 
 
 
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
 
i
d
 
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 

	
	
	
	
	
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
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
'
 

	
	
	
	
	
L
I
M
I
T
 
1

	
	
	
	
	
'
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
u
i
d
 
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
,
 
1
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
_
u
i
d
 
>
 
0
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
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
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
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
d
 
=
 
$
i
n
v
o
i
c
e
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
e
t
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
o
o
k
i
n
g
_
c
a
n
c
e
l
l
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
 
a
 
b
o
o
k
i
n
g
 
i
s
 
c
a
n
c
e
l
l
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
c
o
r
e
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

}

