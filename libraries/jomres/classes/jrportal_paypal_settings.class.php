
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
r
p
o
r
t
a
l
_
p
a
y
p
a
l
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
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
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
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
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
 
'
0
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
'
E
U
R
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
e
m
a
i
l
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
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
 
'
0
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
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
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
e
c
r
e
t
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
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
_
s
a
n
d
b
o
x
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
e
c
r
e
t
_
s
a
n
d
b
o
x
'
 
]
 
=
 
'
'
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
p
a
y
p
a
l
_
s
e
t
t
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
S
E
L
E
C
T
 
s
e
t
t
i
n
g
,
v
a
l
u
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
 
p
r
i
d
 
=
 
0
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
p
a
y
p
a
l
'
"
;

 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
L
i
s
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
e
t
t
i
n
g
L
i
s
t
 
a
s
 
$
s
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
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
$
s
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
-
>
v
a
l
u
e
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
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
 
=
=
 
'
1
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
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
u
b
m
i
t
_
u
r
l
'
 
]
 
=
 
'
h
t
t
p
s
:
/
/
w
w
w
.
s
a
n
d
b
o
x
.
p
a
y
p
a
l
.
c
o
m
/
c
g
i
-
b
i
n
/
w
e
b
s
c
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
a
l
l
b
a
c
k
_
u
r
l
'
 
]
 
=
 
'
w
w
w
.
s
a
n
d
b
o
x
.
p
a
y
p
a
l
.
c
o
m
/
c
g
i
-
b
i
n
/
w
e
b
s
c
r
'
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
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
s
u
b
m
i
t
_
u
r
l
'
 
]
 
=
 
'
h
t
t
p
s
:
/
/
w
w
w
.
p
a
y
p
a
l
.
c
o
m
/
c
g
i
-
b
i
n
/
w
e
b
s
c
r
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
[
 
'
c
a
l
l
b
a
c
k
_
u
r
l
'
 
]
 
=
 
'
w
w
w
.
p
a
y
p
a
l
.
c
o
m
/
c
g
i
-
b
i
n
/
w
e
b
s
c
r
'
;

 
 
 
 
 
 
 
 
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
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
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
 
s
a
v
e
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
(
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
_
P
O
S
T
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
r
t
y
 
=
 
(
s
t
r
i
n
g
)
 
$
k
;

 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
=
 
a
d
d
s
l
a
s
h
e
s
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
k
 
!
=
 
'
t
a
s
k
'
 
&
&
 
$
k
 
!
=
 
'
p
l
u
g
i
n
'
 
&
&
 
$
k
 
!
=
 
'
o
p
t
i
o
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
u
e
s
[
 
$
k
 
]
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
$
k
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
v
a
l
u
e
s
 
a
s
 
$
k
 
=
>
 
$
v
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
 
p
r
i
d
 
=
 
0
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
b
a
c
k
e
n
d
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
'
 
A
N
D
 
s
e
t
t
i
n
g
 
=
 
'
$
k
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
L
i
s
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
!
e
m
p
t
y
(
$
s
e
t
t
i
n
g
L
i
s
t
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
s
e
t
t
i
n
g
L
i
s
t
 
a
s
 
$
s
e
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
d
 
=
 
$
s
e
t
-
>
i
d
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
 
S
E
T
 
`
v
a
l
u
e
`
=
'
$
v
'
 
W
H
E
R
E
 
p
r
i
d
 
=
 
0
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
b
a
c
k
e
n
d
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
'
 
A
N
D
 
s
e
t
t
i
n
g
 
=
 
'
$
k
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

	
	
	
	
	
(
`
p
r
i
d
`
,
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
)
 
V
A
L
U
E
S

	
	
	
	
	
(
0
,
'
b
a
c
k
e
n
d
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
'
,
'
$
k
'
,
'
$
v
'
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

