
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
`
 
(
`
i
d
`
,
 
`
r
o
o
m
t
y
p
e
_
i
d
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
t
y
p
e
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
1
,
 
1
1
,
 
4
)
,

(
2
,
 
1
2
,
 
4
)
,

(
3
,
 
1
3
,
 
4
)
,

(
4
,
 
1
4
,
 
4
)
,

(
5
,
 
1
5
,
 
4
)
,

(
6
,
 
2
1
,
 
4
)
,

(
7
,
 
2
4
,
 
2
)
,

(
8
,
 
2
5
,
 
2
)
,

(
9
,
 
1
6
,
 
3
)
,

(
1
0
,
 
1
7
,
 
3
)
,

(
1
1
,
 
1
9
,
 
3
)
,

(
1
2
,
 
2
0
,
 
3
)
,

(
1
3
,
 
2
2
,
 
2
)
,

(
1
4
,
 
2
3
,
 
2
)
,

(
1
5
,
 
1
8
,
 
3
)
,

(
1
6
,
 
4
,
 
1
)
,

(
1
7
,
 
4
,
 
5
)
,

(
1
8
,
 
1
,
 
1
)
,

(
1
9
,
 
1
,
 
5
)
,

(
2
0
,
 
3
,
 
1
)
,

(
2
1
,
 
3
,
 
5
)
,

(
2
2
,
 
2
,
 
1
)
,

(
2
3
,
 
2
,
 
5
)
,

(
2
4
,
 
6
,
 
6
)
,

(
2
5
,
 
6
,
 
7
)
,

(
2
6
,
 
6
,
 
8
)
,

(
2
7
,
 
7
,
 
6
)
,

(
2
8
,
 
7
,
 
7
)
,

(
2
9
,
 
7
,
 
8
)
,

(
3
0
,
 
8
,
 
6
)
,

(
3
1
,
 
8
,
 
7
)
,

(
3
2
,
 
8
,
 
8
)
,

(
3
3
,
 
9
,
 
6
)
,

(
3
4
,
 
9
,
 
7
)
,

(
3
5
,
 
9
,
 
8
)
,

(
3
6
,
 
1
0
,
 
6
)
,

(
3
7
,
 
1
0
,
 
7
)
,

(
3
8
,
 
1
0
,
 
8
)
,

(
3
9
,
 
5
,
 
7
)
,

(
4
0
,
 
5
,
 
8
)
,

(
4
1
,
 
5
,
 
6
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
r
o
o
m
t
y
p
e
s
_
p
r
o
p
e
r
t
y
t
y
p
e
s
_
x
r
e
f
 
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

