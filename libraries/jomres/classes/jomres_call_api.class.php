
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
 
T
h
i
s
 
a
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
 
c
a
l
l
 
i
t
'
s
 
o
w
n
 
A
P
I
.
 
A
s
 
m
o
r
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
l
i
t
y
 
i
s
 
a
d
d
e
d
 
t
o
 
t
h
e
 
A
P
I
 
t
h
e
n
 
t
h
e
r
e
 
a
r
e
 
t
i
m
e
s
 
t
h
a
t
 
t
h
a
t
 
w
i
l
l
 
b
e
 
t
h
e
 
c
h
o
i
c
e
 
o
f
 
c
o
n
n
e
c
t
i
o
n
.


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
a
l
l
_
a
p
i

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
r
i
v
a
t
e
 
$
t
o
k
e
n
;

 
 
 
 
p
r
i
v
a
t
e
 
$
s
e
r
v
e
r
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
i
n
i
t
(
)
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
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
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

 
 
 
 
 
 
 
 
/
/
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
r
e
g
i
s
t
e
r
e
d
,
 
w
e
'
l
l
 
c
r
e
a
t
e
 
a
 
n
e
w
 
A
P
I
 
c
l
i
e
n
t
 
a
n
d
 
s
e
c
r
e
t
 
f
o
r
 
t
h
a
t
 
u
s
e
r
 
i
f
 
n
e
e
d
e
d
.
 
T
h
a
t
 
w
a
y
,
 
a
n
y
 
c
a
l
l
s
 
d
o
n
e
 
t
o
 
t
h
e
 
A
P
I
 
w
i
l
l
 
b
e
 
t
r
a
c
e
a
b
l
e
 
b
a
c
k
 
t
o
 
t
h
a
t
 
u
s
e
r
.

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
 
$
t
h
i
s
J
R
U
s
e
r
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
 
1
 
)
 
{
 
/
/
 
T
h
e
 
u
s
e
r
'
s
 
r
e
g
i
s
t
e
r
e
d
 
o
r
 
g
r
e
a
t
e
r

 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
t
h
_
d
e
e
t
s
 
=
 
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
_
m
a
n
a
g
e
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
_
i
d
 
=
 
$
a
u
t
h
_
d
e
e
t
s
[
'
c
l
i
e
n
t
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
 
=
 
$
a
u
t
h
_
d
e
e
t
s
[
'
c
l
i
e
n
t
_
s
e
c
r
e
t
'
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
 
c
l
i
e
n
t
_
i
d
,
c
l
i
e
n
t
_
s
e
c
r
e
t
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
c
l
i
e
n
t
_
i
d
 
=
 
'
s
y
s
t
e
m
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
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
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
_
i
d
 
=
 
$
r
e
s
u
l
t
[
'
c
l
i
e
n
t
_
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
 
=
 
$
r
e
s
u
l
t
[
'
c
l
i
e
n
t
_
s
e
c
r
e
t
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
g
e
t
S
i
n
g
l
e
t
o
n
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
6
0
0
5
'
]
[
'
o
a
u
t
h
'
]
)
 
&
&
 
i
s
s
e
t
(
$
c
l
i
e
n
t
_
s
e
c
r
e
t
)
 
&
&
 
t
r
i
m
(
$
c
l
i
e
n
t
_
s
e
c
r
e
t
)
 
!
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
s
e
r
v
e
r
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
a
p
i
/
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
a
 
=
 
a
r
r
a
y
(
'
g
r
a
n
t
_
t
y
p
e
'
 
=
>
 
'
c
l
i
e
n
t
_
c
r
e
d
e
n
t
i
a
l
s
'
,
 
'
c
l
i
e
n
t
_
i
d
'
 
=
>
 
$
c
l
i
e
n
t
_
i
d
,
 
'
c
l
i
e
n
t
_
s
e
c
r
e
t
'
 
=
>
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
k
e
n
_
r
e
q
u
e
s
t
 
=
 
$
t
h
i
s
-
>
q
u
e
r
y
_
a
p
i
(
'
P
O
S
T
'
,
 
'
/
'
,
 
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
t
o
k
e
n
_
r
e
q
u
e
s
t
[
'
r
e
s
p
o
n
s
e
'
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
p
o
n
s
e
-
>
a
c
c
e
s
s
_
t
o
k
e
n
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
t
o
k
e
n
 
=
 
$
r
e
s
p
o
n
s
e
-
>
a
c
c
e
s
s
_
t
o
k
e
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
$
r
e
s
p
o
n
s
e
-
>
e
r
r
o
r
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
i
n
i
t
_
m
a
n
a
g
e
r
(
)
 
{

 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
s
e
e
 
i
f
 
t
h
e
r
e
'
s
 
a
 
u
s
e
r
 
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
,
 
i
f
 
t
h
e
r
e
'
s
 
n
o
t
 
w
e
'
l
l
 
c
r
e
a
t
e
 
t
h
e
m
.
 

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 
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
l
i
e
n
t
_
i
d
,
s
c
o
p
e
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
c
l
i
e
n
t
_
i
d
 
=
 
'
"
.
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
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
e
m
p
t
y
(
$
r
e
s
u
l
t
)
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
`
c
l
i
e
n
t
_
i
d
`
,
`
c
l
i
e
n
t
_
s
e
c
r
e
t
`
,
`
r
e
d
i
r
e
c
t
_
u
r
i
`
,
`
g
r
a
n
t
_
t
y
p
e
s
`
,
`
s
c
o
p
e
`
,
`
u
s
e
r
_
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
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
.
"
'
,
'
"
.
c
r
e
a
t
e
N
e
w
A
P
I
K
e
y
(
)
.
"
'
,
'
'
,
n
u
l
l
,
'
*
'
,
"
.
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
"
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
 
j
r
_
g
e
t
t
e
x
t
(
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
 
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
 
f
a
l
s
e
)
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
 
o
a
u
t
h
 
c
l
i
e
n
t
 
d
e
t
a
i
l
s
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
'
)
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
 
"
S
E
L
E
C
T
 
c
l
i
e
n
t
_
s
e
c
r
e
t
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
c
l
i
e
n
t
_
i
d
 
=
 
'
"
.
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
 
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
 
"
c
l
i
e
n
t
_
i
d
"
 
=
>
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
 
,
"
c
l
i
e
n
t
_
s
e
c
r
e
t
"
 
=
>
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
 
)
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
 
s
e
n
d
_
r
e
q
u
e
s
t
(
$
m
e
t
h
o
d
 
=
 
'
'
,
 
$
r
e
q
u
e
s
t
 
=
 
'
'
,
 
$
d
a
t
a
 
=
 
a
r
r
a
y
(
)
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
t
o
k
e
n
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
$
t
h
i
s
-
>
q
u
e
r
y
_
a
p
i
(
$
m
e
t
h
o
d
,
 
$
r
e
q
u
e
s
t
,
 
$
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
p
o
n
s
e
[
'
r
e
s
p
o
n
s
e
_
c
o
d
e
'
]
 
=
=
 
'
2
0
0
'
 
|
|
 
$
r
e
s
p
o
n
s
e
[
'
r
e
s
p
o
n
s
e
_
c
o
d
e
'
]
 
=
=
 
'
2
0
4
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
j
s
o
n
_
d
e
c
o
d
e
(
$
r
e
s
p
o
n
s
e
[
'
r
e
s
p
o
n
s
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
C
a
l
l
 
t
o
 
A
P
I
 
r
e
s
u
l
t
e
d
 
i
n
 
r
e
s
p
o
n
s
e
 
c
o
d
e
 
'
.
$
r
e
s
p
o
n
s
e
[
'
r
e
s
p
o
n
s
e
_
c
o
d
e
'
]
.
'
 
a
n
d
 
m
e
s
s
a
g
e
 
'
.
$
r
e
s
p
o
n
s
e
[
'
r
e
s
p
o
n
s
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
C
o
u
l
d
 
n
o
t
 
c
a
l
l
 
A
P
I
 
a
s
 
t
o
k
e
n
 
n
o
t
 
s
e
t
u
p
.
 
I
s
 
t
h
e
 
A
P
I
 
C
o
r
e
 
i
n
s
t
a
l
l
e
d
?
'
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
 
q
u
e
r
y
_
a
p
i
(
$
m
e
t
h
o
d
 
=
 
'
G
E
T
'
,
 
$
r
e
q
u
e
s
t
 
=
 
'
'
,
 
$
d
a
t
a
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
h
 
=
 
c
u
r
l
_
i
n
i
t
(
$
t
h
i
s
-
>
s
e
r
v
e
r
.
$
r
e
q
u
e
s
t
)
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
e
t
h
o
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
a
s
e
 
'
P
O
S
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
d
a
t
a
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
E
L
E
T
E
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
U
S
T
O
M
R
E
Q
U
E
S
T
,
 
'
D
E
L
E
T
E
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
P
U
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
U
S
T
O
M
R
E
Q
U
E
S
T
,
 
'
P
U
T
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
h
t
t
p
_
b
u
i
l
d
_
q
u
e
r
y
(
$
d
a
t
a
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
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
t
o
k
e
n
)
 
&
&
 
$
t
h
i
s
-
>
t
o
k
e
n
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
H
T
T
P
H
E
A
D
E
R
,
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
A
u
t
h
o
r
i
z
a
t
i
o
n
:
 
B
e
a
r
e
r
 
'
.
$
t
h
i
s
-
>
t
o
k
e
n
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
A
c
c
e
p
t
:
 
a
p
p
l
i
c
a
t
i
o
n
/
j
s
o
n
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
I
N
F
O
_
H
E
A
D
E
R
_
O
U
T
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
T
I
M
E
O
U
T
,
 
3
0
)
;
 
/
/
t
i
m
e
o
u
t
 
a
f
t
e
r
 
3
0
 
s
e
c
o
n
d
s

 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
R
E
T
U
R
N
T
R
A
N
S
F
E
R
,
 
1
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
c
u
r
l
_
e
x
e
c
(
$
c
h
)
;

 
 
 
 
 
 
 
 
$
s
t
a
t
u
s
 
=
 
c
u
r
l
_
g
e
t
i
n
f
o
(
$
c
h
)
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
_
c
o
d
e
 
=
 
c
u
r
l
_
g
e
t
i
n
f
o
(
$
c
h
,
 
C
U
R
L
I
N
F
O
_
H
T
T
P
_
C
O
D
E
)
;

 
 
 
 
 
 
 
 
c
u
r
l
_
c
l
o
s
e
(
$
c
h
)
;


 
 
 
 
 
 
 
 
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
'
r
e
s
p
o
n
s
e
_
c
o
d
e
'
 
=
>
 
$
r
e
s
p
o
n
s
e
_
c
o
d
e
,
 
'
r
e
s
p
o
n
s
e
'
 
=
>
 
$
r
e
s
u
l
t
,
 
'
s
t
a
t
u
s
'
 
=
>
 
$
s
t
a
t
u
s
)
;

 
 
 
 
}

}

