
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
 
w
e
b
h
o
o
k
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
 
$
m
a
n
a
g
e
r
_
i
d
 
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
 
(
i
n
t
)
$
m
a
n
a
g
e
r
_
i
d
 
=
=
 
0
 
)

 
 
 
 
 
 
 
 
 
 
 
 
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
 
I
n
c
o
r
r
e
c
t
 
m
a
n
a
g
e
r
 
i
d
 
u
s
e
d
 
w
h
e
n
 
s
e
t
t
i
n
g
 
w
e
b
h
o
o
k
s
 
o
b
j
e
c
t
'
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
a
n
a
g
e
r
_
i
d
 
=
 
(
i
n
t
)
$
m
a
n
a
g
e
r
_
i
d
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
e
b
h
o
o
k
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
w
e
b
h
o
o
k
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
 
'
S
E
L
E
C
T
 
`
i
d
`
,
 
`
m
a
n
a
g
e
r
_
i
d
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
s
`
 
,
 
`
e
n
a
b
l
e
d
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
w
e
b
h
o
o
k
s
_
i
n
t
e
g
r
a
t
i
o
n
s
 
W
H
E
R
E
 
m
a
n
a
g
e
r
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
m
a
n
a
g
e
r
_
i
d
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
 
!
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
r
-
>
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
 
"
i
d
"
 
=
>
 
$
r
-
>
i
d
 
,
 
"
m
a
n
a
g
e
r
_
i
d
"
 
=
>
 
$
r
-
>
m
a
n
a
g
e
r
_
i
d
 
,
 
"
s
e
t
t
i
n
g
s
"
 
=
>
 
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
r
-
>
s
e
t
t
i
n
g
s
)
 
,
 
"
e
n
a
b
l
e
d
"
 
=
>
 
(
b
o
o
l
)
$
r
-
>
e
n
a
b
l
e
d
 
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
 
$
t
h
i
s
-
>
w
e
b
h
o
o
k
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
_
w
e
b
h
o
o
k
 
(
 
$
i
d
 
)
 
{

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
w
e
b
h
o
o
k
s
)
)

 
 
 
 
 
 
 
 
 
 
 
 
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
 
W
e
b
h
o
o
k
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
.
 
D
i
d
 
y
o
u
 
t
r
y
 
t
o
 
c
a
l
l
 
g
e
t
_
w
e
b
h
o
o
k
 
b
e
f
o
r
e
 
g
e
t
_
a
l
l
_
w
e
b
h
o
o
k
s
?
'
)
;

 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
s
[
$
i
d
]
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
t
_
s
e
t
t
i
n
g
(
 
$
i
d
 
,
 
$
k
e
y
 
,
 
$
v
a
l
 
)
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
s
e
t
t
i
n
g
s
"
]
[
$
k
e
y
]
 
=
 
$
v
a
l
 
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
o
m
m
i
t
_
i
n
t
e
g
r
a
t
i
o
n
(
 
$
i
d
 
=
0
 
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
 
$
i
d
 
=
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
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
e
n
a
b
l
e
d
"
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
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
e
n
a
b
l
e
d
"
]
 
=
 
1
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
w
e
b
h
o
o
k
s
_
i
n
t
e
g
r
a
t
i
o
n
s
 
(
`
m
a
n
a
g
e
r
_
i
d
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
s
`
 
,
 
`
e
n
a
b
l
e
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
"
.
$
t
h
i
s
-
>
m
a
n
a
g
e
r
_
i
d
.
"
 
,
 
'
"
.
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
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
s
e
t
t
i
n
g
s
"
]
)
.
"
'
 
,
 
"
.
$
t
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
e
n
a
b
l
e
d
"
]
.
"
 
 
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
t
e
g
r
a
t
i
o
n
_
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
 
f
a
l
s
e
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
(
i
n
t
)
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
 
>
 
0
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
i
n
t
e
g
r
a
t
i
o
n
_
i
d
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
 
"
E
r
r
o
r
:
 
W
e
b
h
o
o
k
 
i
n
s
e
r
t
i
o
n
 
f
a
i
l
e
d
.
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
s
_
i
n
t
e
g
r
a
t
i
o
n
s
 
S
E
T
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
m
a
n
a
g
e
r
_
i
d
`
 
=
 
"
.
$
t
h
i
s
-
>
m
a
n
a
g
e
r
_
i
d
.
"
 
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
s
e
t
t
i
n
g
s
`
 
=
 
'
"
.
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
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
s
e
t
t
i
n
g
s
"
]
)
.
"
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
e
n
a
b
l
e
d
`
 
=
 
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
w
e
b
h
o
o
k
s
[
$
i
d
]
[
"
e
n
a
b
l
e
d
"
]
.
"

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
W
H
E
R
E
 
i
d
 
=
 
"
.
$
i
d
.
"

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
f
a
l
s
e
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
r
e
s
u
l
t
 
=
=
 
t
r
u
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
i
d
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
 
"
E
r
r
o
r
:
 
W
e
b
h
o
o
k
 
u
p
d
a
t
e
 
f
a
i
l
e
d
.
"
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
d
e
l
e
t
e
_
i
n
t
e
g
r
a
t
i
o
n
 
(
 
$
i
d
 
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
t
h
i
s
-
>
w
e
b
h
o
o
k
s
[
$
i
d
]
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
 
"
E
r
r
o
r
:
 
C
a
n
n
o
t
 
d
e
l
e
t
e
 
i
n
t
e
g
r
a
t
i
o
n
 
a
s
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
 
(
 
f
o
r
 
t
h
i
s
 
u
s
e
r
 
)
 
"
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
w
e
b
h
o
o
k
s
_
i
n
t
e
g
r
a
t
i
o
n
s
 
W
H
E
R
E
 
i
d
 
=
 
"
.
(
i
n
t
)
$
i
d
.
"
 
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
 
f
a
l
s
e
 
)
;

 
 
 
 
 
 
 
 
i
f
 
(
 
$
r
e
s
u
l
t
 
=
=
 
t
r
u
e
 
)
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
"
E
r
r
o
r
:
 
W
e
b
h
o
o
k
 
f
a
i
l
e
d
 
t
o
 
d
e
l
e
t
e
 
i
n
t
e
g
r
a
t
i
o
n
.
"
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 

}

