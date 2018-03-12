
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
1
6
0
0
0
s
a
v
e
_
g
a
t
e
w
a
y

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

 
 
 
 
 
 
 
 
i
f
 
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
t
e
m
p
l
a
t
e
_
t
o
u
c
h
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
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
 
=
 
(
s
t
r
i
n
g
)
 
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
R
E
Q
U
E
S
T
,
 
'
p
l
u
g
i
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
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
R
E
Q
U
E
S
T
,
 
'
g
a
t
e
w
a
y
'
,
 
'
'
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
 
f
i
l
t
e
r
_
v
a
r
(
$
d
i
r
t
y
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
,
 
F
I
L
T
E
R
_
F
L
A
G
_
S
T
R
I
P
_
H
I
G
H
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
n
o
h
t
m
l
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
$
p
l
u
g
i
n
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
$
p
l
u
g
i
n
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
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
U
P
D
A
T
E
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
U
P
D
A
T
E
'
,
 
f
a
l
s
e
)
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
$
p
l
u
g
i
n
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
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
I
N
S
E
R
T
'
,
 
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
P
L
U
G
I
N
S
_
I
N
S
E
R
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
t
_
g
a
t
e
w
a
y
s
'
)
,
 
'
'
)
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

