
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
7
 
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


$
q
u
e
r
y
 
=
 
"
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
`
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
t
y
p
e
s
`
;
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
s
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
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
t
r
u
n
c
a
t
e
 
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
t
y
p
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
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
 
`
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
t
y
p
e
s
`
 
(
`
i
d
`
,
 
`
p
t
y
p
e
`
,
 
`
p
t
y
p
e
_
d
e
s
c
`
,
 
`
p
u
b
l
i
s
h
e
d
`
,
 
`
o
r
d
e
r
`
,
 
`
m
r
p
_
s
r
p
_
f
l
a
g
`
,
 
`
m
a
r
k
e
r
`
,
 
`
h
a
s
_
s
t
a
r
s
`
)
 
V
A
L
U
E
S

(
1
,
 
'
H
o
t
e
l
'
,
 
'
p
r
o
p
e
r
t
y
r
e
n
t
a
l
'
,
 
1
,
 
0
,
 
0
,
 
'
b
u
i
l
d
i
n
g
.
p
n
g
'
,
 
1
)
,

(
2
,
 
'
Y
a
c
h
t
'
,
 
'
y
a
c
h
t
'
,
 
1
,
 
0
,
 
1
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
b
l
u
e
.
p
n
g
'
,
 
1
)
,

(
3
,
 
'
C
a
r
'
,
 
'
c
a
r
'
,
 
1
,
 
0
,
 
1
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
0
)
,

(
4
,
 
'
C
a
m
p
 
S
i
t
e
'
,
 
'
c
a
m
p
s
i
t
e
'
,
 
1
,
 
0
,
 
0
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
1
)
,

(
5
,
 
'
B
e
d
 
a
n
d
 
B
r
e
a
k
f
a
s
t
'
,
 
'
p
r
o
p
e
r
t
y
r
e
n
t
a
l
'
,
 
1
,
 
0
,
 
0
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
1
)
,

(
6
,
 
'
V
i
l
l
a
'
,
 
'
p
r
o
p
e
r
t
y
r
e
n
t
a
l
'
,
 
1
,
 
0
,
 
1
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
1
)
,

(
7
,
 
'
A
p
a
r
t
m
e
n
t
'
,
 
'
p
r
o
p
e
r
t
y
r
e
n
t
a
l
'
,
 
1
,
 
0
,
 
1
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
0
)
,

(
8
,
 
'
C
o
t
t
a
g
e
'
,
 
'
p
r
o
p
e
r
t
y
r
e
n
t
a
l
'
,
 
1
,
 
0
,
 
1
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
1
)
,

(
9
,
 
'
T
o
u
r
'
,
 
'
t
o
u
r
'
,
 
1
,
 
0
,
 
3
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
0
)
,

(
1
0
,
 
'
F
o
r
 
S
a
l
e
'
,
 
'
r
e
a
l
e
s
t
a
t
e
'
,
 
1
,
 
0
,
 
4
,
 
'
f
r
e
e
-
m
a
p
-
m
a
r
k
e
r
-
i
c
o
n
-
r
e
d
.
p
n
g
'
,
 
1
)
;

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
s
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
'
E
r
r
o
r
,
 
u
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
 
s
a
m
p
l
e
 
d
a
t
a
 
i
n
 
t
h
e
 
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
t
y
p
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

